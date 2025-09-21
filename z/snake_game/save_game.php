<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

if ($_POST) {
    $score = intval($_POST['score']);
    $food_eaten = intval($_POST['food_eaten']);
    $game_duration = intval($_POST['game_duration']);
    $user_id = $_SESSION['user_id'];
    
    try {
        // Start transaction
        $pdo->beginTransaction();
        
        // Insert game session
        $stmt = $pdo->prepare("INSERT INTO game_sessions (user_id, score, game_duration, food_eaten) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user_id, $score, $game_duration, $food_eaten]);
        
        // Update user stats
        $stmt = $pdo->prepare("UPDATE users SET 
            total_games_played = total_games_played + 1,
            total_score = total_score + ?,
            highest_score = GREATEST(highest_score, ?)
            WHERE id = ?");
        $stmt->execute([$score, $score, $user_id]);
        
        // Commit transaction
        $pdo->commit();
        
        // Get updated highest score
        $stmt = $pdo->prepare("SELECT highest_score FROM users WHERE id = ?");
        $stmt->execute([$user_id]);
        $highest_score = $stmt->fetchColumn();
        
        $_SESSION['highest_score'] = $highest_score;
        
        echo json_encode([
            'success' => true, 
            'message' => 'Game saved successfully',
            'highest_score' => $highest_score
        ]);
    } catch (Exception $e) {
        $pdo->rollBack();
        echo json_encode(['success' => false, 'message' => 'Error saving game: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>