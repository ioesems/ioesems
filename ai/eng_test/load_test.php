<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $testId = $_POST['test_id'] ?? 0;
    
    if ($testId <= 0) {
        echo json_encode(['error' => 'Invalid test ID']);
        exit;
    }
    
    $stmt = $pdo->prepare("SELECT * FROM test_results 
                          WHERE id = ? AND user_id = ?");
    $stmt->execute([$testId, $_SESSION['user_id']]);
    $test = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$test) {
        echo json_encode(['error' => 'Test not found']);
        exit;
    }
    
    // Convert percentages to strings with % sign for display
    $test['spelling_percent'] = $test['spelling_percent'] . '%';
    $test['grammar_percent'] = $test['grammar_percent'] . '%';
    $test['subject_verb_percent'] = $test['subject_verb_percent'] . '%';
    $test['article_percent'] = $test['article_percent'] . '%';
    $test['other_mistakes_percent'] = $test['other_mistakes_percent'] . '%';
    
    echo json_encode($test);
    exit;
}

echo json_encode(['error' => 'Invalid request']);
?>