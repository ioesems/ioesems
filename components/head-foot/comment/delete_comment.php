<?php
session_start();
include __DIR__ . '/../../login/config.php';

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: comment.php?error=' . urlencode('You must be logged in to delete comments.'));
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: comment.php?error=' . urlencode('Invalid request.'));
    exit;
}

$comment_id = (int)$_GET['id'];

// Verify ownership by user_id
$stmt = $conn->prepare("SELECT user_id FROM comments WHERE id = ?");
$stmt->bind_param("i", $comment_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header('Location: comment.php?error=' . urlencode('Comment not found.'));
    exit;
}

$row = $result->fetch_assoc();
if ($row['user_id'] !== $_SESSION['user_id']) {
    header('Location: comment.php?error=' . urlencode('You can only delete your own comments.'));
    exit;
}

// Delete comment
$stmt = $conn->prepare("DELETE FROM comments WHERE id = ?");
$stmt->bind_param("i", $comment_id);

if ($stmt->execute()) {
    header('Location: comment.php?success=' . urlencode('🗑️ Comment deleted successfully.'));
} else {
    header('Location: comment.php?error=' . urlencode('Failed to delete comment.'));
}

$stmt->close();
$conn->close();
?>