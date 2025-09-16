<?php
// api/ask.php

session_start();
require_once 'config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// 🔒 MUST BE LOGGED IN
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    http_response_code(401);
    echo json_encode(["error" => "You must be logged in to ask a question"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);
$question_text = trim($data['question'] ?? '');

if (empty($question_text)) {
    http_response_code(400);
    echo json_encode(["error" => "Question cannot be empty"]);
    exit;
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['name'];

$stmt = $conn->prepare("INSERT INTO questions (user_id, user_name, question_text) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $user_id, $user_name, $question_text);

if ($stmt->execute()) {
    echo json_encode([
        "success" => true,
        "question_id" => $stmt->insert_id
    ]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to save question"]);
}

$stmt->close();
$conn->close();
?>