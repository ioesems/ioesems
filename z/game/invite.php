<?php
require_once 'config.php';

$token = $_GET['token'] ?? '';

if (empty($token)) {
    header("Location: login.php");
    exit();
}

// ✅ FIXED: Uses DATETIME comparison
$stmt = $pdo->prepare("
    SELECT i.*, gr.room_code, u.username as sender_name 
    FROM invitations i 
    JOIN game_rooms gr ON i.room_id = gr.id 
    JOIN users u ON i.sender_id = u.id 
    WHERE i.token = ? AND i.status = 'pending' AND i.expires_at > NOW()
");
$stmt->execute([$token]);
$invitation = $stmt->fetch();

if (!$invitation) {
    die("<div class='container mt-5'><div class='alert alert-danger text-center'><h4>❌ Invalid or Expired Invitation</h4><p>This invitation link is no longer valid.</p><a href='dashboard.php' class='btn btn-primary'>Go to Dashboard</a></div></div>");
}

// ... rest of your invite.php logic remains the same
?>