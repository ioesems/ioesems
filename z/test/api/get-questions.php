<?php
// api/get-questions.php

require_once 'config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

$stmt = $conn->prepare("
    SELECT q.id, q.user_id as question_user_id, q.user_name as question_user_name, q.question_text, q.created_at,
           a.id as answer_id, a.user_id as answer_user_id, a.user_name as answer_user_name, a.answer_text, a.created_at as answer_created_at
    FROM questions q
    LEFT JOIN answers a ON q.id = a.question_id
    ORDER BY q.created_at DESC, a.created_at ASC
");
$stmt->execute();
$result = $stmt->get_result();

$questions = [];

while ($row = $result->fetch_assoc()) {
    $question_id = $row['id'];

    if (!isset($questions[$question_id])) {
        $questions[$question_id] = [
            'id' => $question_id,
            'question_user_id' => $row['question_user_id'],
            'question_user_name' => $row['question_user_name'],
            'question_text' => $row['question_text'],
            'created_at' => $row['created_at'],
            'answers' => []
        ];
    }

    if ($row['answer_id'] !== null) {
        $questions[$question_id]['answers'][] = [
            'id' => $row['answer_id'],
            'answer_user_id' => $row['answer_user_id'],
            'answer_user_name' => $row['answer_user_name'],
            'answer_text' => $row['answer_text'],
            'answer_created_at' => $row['answer_created_at']
        ];
    }
}

echo json_encode(array_values($questions));
$stmt->close();
$conn->close();
?>