<?php
session_start();
include __DIR__ . '/../../login/config.php';

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: comment.php?error=' . urlencode('You must be logged in to edit comments.'));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['comment_id']) || !isset($_POST['comment_text'])) {
    header('Location: comment.php?error=' . urlencode('Invalid request.'));
    exit;
}

$comment_id = (int)$_POST['comment_id'];
$comment_text = trim($_POST['comment_text']);

if (empty($comment_text)) {
    header('Location: comment.php?error=' . urlencode('Comment cannot be empty.'));
    exit;
}

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
    header('Location: comment.php?error=' . urlencode('You can only edit your own comments.'));
    exit;
}

// Update comment
$stmt = $conn->prepare("UPDATE comments SET comment_text = ? WHERE id = ?");
$stmt->bind_param("si", $comment_text, $comment_id);

if ($stmt->execute()) {
    header('Location: comment.php?success=' . urlencode('✅ Comment updated successfully.'));
} else {
    header('Location: comment.php?error=' . urlencode('Failed to update comment.'));
}

$stmt->close();
$conn->close();
?>