<?php
header('Content-Type: application/json');

require 'db_connect.php';

$customer_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$dob = !empty($_POST['dob']) ? $_POST['dob'] : null;
$gender = $_POST['gender'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['ph-no'], FILTER_SANITIZE_STRING);
$contact_time = $_POST['contact-time'];
$address = filter_var($_POST['address-area'], FILTER_SANITIZE_STRING);
$order_type = $_POST['order-type'];
$visit_count = $_POST['visit-count'];
$visit_date = !empty($_POST['dov']) ? $_POST['dov'] : null;

try {
    $stmt = $conn->prepare("INSERT INTO feedback (customer_name, dob, gender, email, phone, contact_time, address, order_type, visit_count, visit_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$customer_name, $dob, $gender, $email, $phone, $contact_time, $address, $order_type, $visit_count, $visit_date]);
    echo json_encode(['success' => true, 'message' => 'Feedback submitted successfully!']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'An error occurred.']);
}
?>