<?php
session_start();
require_once 'config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    http_response_code(401);
    echo json_encode(["error" => "You must be logged in to edit"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);
$id = (int)($data['id'] ?? 0);
$question_text = trim($data['question_text'] ?? '');

if (!$id || empty($question_text)) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid question ID or empty content"]);
    exit;
}

$user_id = $_SESSION['user_id'];

// Check if user owns this question
$stmt = $conn->prepare("SELECT user_id FROM questions WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if ($row['user_id'] !== $user_id) {
        http_response_code(403);
        echo json_encode(["error" => "You can only edit your own questions"]);
        exit;
    }
} else {
    http_response_code(404);
    echo json_encode(["error" => "Question not found"]);
    exit;
}

// Update question
$stmt = $conn->prepare("UPDATE questions SET question_text = ? WHERE id = ?");
$stmt->bind_param("si", $question_text, $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to update question"]);
}

$stmt->close();
$conn->close();
?>