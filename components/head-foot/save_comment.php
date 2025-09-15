<?php
session_start();
include __DIR__ . '/../login/config.php'; // Your DB config

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('HTTP/1.1 401 Unauthorized');
    exit('You must be logged in to post a comment.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment_text'])) {
    $username = $_SESSION['username'];
    $comment_text = $conn->real_escape_string(trim($_POST['comment_text']));
    $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO comments (username, comment_text, created_at) VALUES ('$username', '$comment_text', '$created_at')";
    if ($conn->query($sql) === TRUE) {
        // No need to echo JSON; redirect or reload page
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        exit('Error: ' . $conn->error);
    }
} else {
    exit('Comment text cannot be empty.');
}
$conn->close();
