<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

$parent_name = htmlspecialchars(trim($_POST['parent_name'] ?? ''));
$student_name = htmlspecialchars(trim($_POST['student_name'] ?? ''));
$phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));
$grade = htmlspecialchars(trim($_POST['grade'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

if (empty($parent_name) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Please provide Parent Name and Contact Number.']);
    exit;
}

// Log inquiry to local JSON store
$logDir = __DIR__ . '/../data';
if (!is_dir($logDir)) {
    mkdir($logDir, 0755, true);
}

$dataFile = $logDir . '/inquiries.json';
$inquiries = [];
if (file_exists($dataFile)) {
    $existing = file_get_contents($dataFile);
    $inquiries = json_decode($existing, true) ?: [];
}

$inquiryRecord = [
    'id' => uniqid('SDIS_'),
    'date' => date('Y-m-d H:i:s'),
    'parent_name' => $parent_name,
    'student_name' => $student_name,
    'phone' => $phone,
    'email' => $email,
    'grade' => $grade,
    'message' => $message
];

$inquiries[] = $inquiryRecord;
file_put_contents($dataFile, json_encode($inquiries, JSON_PRETTY_PRINT));

echo json_encode([
    'success' => true,
    'message' => 'Your admission inquiry has been received. Our counselor will contact you shortly.',
    'ref_id' => $inquiryRecord['id']
]);
