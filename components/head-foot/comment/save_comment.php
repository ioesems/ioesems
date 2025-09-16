<?php
session_start();
include __DIR__ . '/../../login/config.php';

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    http_response_code(403);
    echo json_encode(['error' => 'Not logged in']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment_text'])) {
    $user_id = $_SESSION['user_id']; // Firebase localId
    $username = $_SESSION['name'];   // Display name from Firebase
    $comment_text = trim($_POST['comment_text']);

    if (empty($comment_text)) {
        http_response_code(400);
        echo json_encode(['error' => 'Comment cannot be empty']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO comments (user_id, username, comment_text, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $user_id, $username, $comment_text);

    if ($stmt->execute()) {
        header('Location: comment.php?success=' . urlencode('Comment posted successfully.'));
    } else {
        header('Location: comment.php?error=' . urlencode('Failed to post comment.'));
    }
    exit;
}
?>