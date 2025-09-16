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
$answer_text = trim($data['answer_text'] ?? '');

if (!$id || empty($answer_text)) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid answer ID or empty content"]);
    exit;
}

$user_id = $_SESSION['user_id'];

// Check ownership
$stmt = $conn->prepare("SELECT user_id FROM answers WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if ($row['user_id'] !== $user_id) {
        http_response_code(403);
        echo json_encode(["error" => "You can only edit your own answers"]);
        exit;
    }
} else {
    http_response_code(404);
    echo json_encode(["error" => "Answer not found"]);
    exit;
}

// Update answer
$stmt = $conn->prepare("UPDATE answers SET answer_text = ? WHERE id = ?");
$stmt->bind_param("si", $answer_text, $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to update answer"]);
}

$stmt->close();
$conn->close();
?>