<?php

header('Content-Type: application/json');

require 'db_connect.php';

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Email already registered.']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $password]);
    echo json_encode(['success' => true, 'message' => 'Registration successful! Login NOW.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'An error occurred.']);
}

?>