<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'config.php';

// Validate required session variables
if (!isset($_SESSION['test_subject']) || !isset($_SESSION['test_question_count'])) {
    $_SESSION['error'] = "Test configuration missing. Please start again.";
    header("Location: user_interface.php");
    exit();
}

// Get current admin setting
$stmt = $pdo->prepare("SELECT question_source FROM system_settings WHERE id = 1");
$stmt->execute();
$setting = $stmt->fetch();
$question_source = $setting ? $setting['question_source'] : 'ai_only';

// Route based on admin setting
switch ($question_source) {
    case 'local_only':
        header("Location: local_question_fetch.php");
        break;
        
    case 'ai_local':
        header("Location: hybrid_question_fetching.php");
        break;
        
    case 'ai_only':
    default:
        header("Location: send_to_ai.php");
        break;
}

exit();
?>