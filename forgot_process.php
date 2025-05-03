<?php
header('Content-Type: application/json');

require 'db_connect.php';

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo json_encode(['success' => false, 'message' => 'Passwords do not match.']);
    exit;
}

try {
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if (!$stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Email not found.']);
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_expiry = NULL WHERE email = ?");
    $stmt->execute([$hashed_password, $email]);
    echo json_encode(['success' => true, 'message' => 'Password reset successful!']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'An error occurred.']);
}
?>