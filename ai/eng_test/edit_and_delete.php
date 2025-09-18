<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $testId = $_POST['test_id'] ?? 0;

    if ($action === 'delete' && $testId > 0) {
        $stmt = $pdo->prepare("DELETE FROM test_results WHERE id = ? AND user_id = ?");
        $stmt->execute([$testId, $_SESSION['user_id']]);
        echo json_encode(['success' => true]);
        exit;
    }
}

echo json_encode(['success' => false]);
?>