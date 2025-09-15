<?php
// api/answer.php

session_start();
require_once 'config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// 🔒 MUST BE LOGGED IN
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    http_response_code(401);
    echo json_encode(["error" => "You must be logged in to answer a question"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);
$question_id = (int)($data['question_id'] ?? 0);
$answer_text = trim($data['answer'] ?? '');

if (!$question_id || empty($answer_text)) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid question ID or empty answer"]);
    exit;
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['name'];

$stmt = $conn->prepare("INSERT INTO answers (question_id, user_id, user_name, answer_text) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $question_id, $user_id, $user_name, $answer_text);

if ($stmt->execute()) {
    echo json_encode([
        "success" => true,
        "answer_id" => $stmt->insert_id
    ]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to save answer"]);
}

$stmt->close();
$conn->close();
?>