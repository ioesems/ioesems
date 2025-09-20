<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$questions = $_SESSION['mcq_questions'] ?? [];
$user_answers = $_SESSION['user_answers'] ?? [];
$subject = $_SESSION['test_subject'] ?? 'General';
$chapter = $_SESSION['test_chapter'] ?? null;
$question_count = $_SESSION['test_question_count'] ?? 20;
$time_limit_minutes = $_SESSION['time_limit_minutes'] ?? 30;
$test_type = $_SESSION['test_type'] ?? 'set';

if (empty($questions) || empty($user_answers)) {
    header("Location: user_interface.php");
    exit();
}

$score = 0;
$total = count($questions);

for ($i = 0; $i < $total; $i++) {
    $correct_key = $questions[$i]['correct_answer'];
    $user_choice_key = $user_answers[$i] ?? '';
    $correct_index = array_search($correct_key, ['A','B','C','D']);
    $user_index = (int)$user_choice_key;
    if ($user_index === $correct_index) $score++;
}

// Save to database with all metadata
$stmt = $pdo->prepare("
    INSERT INTO test_results (user_id, score, total_questions, subject, chapter, test_type, question_count)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");
$stmt->execute([
    $_SESSION['user_id'],
    $score,
    $total,
    $subject,
    $chapter,
    $test_type,
    $question_count
]);

unset($_SESSION['mcq_questions'], $_SESSION['user_answers'], $_SESSION['test_subject'], $_SESSION['test_chapter'], $_SESSION['test_question_count'], $_SESSION['time_limit_minutes'], $_SESSION['test_type']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Score</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fecfef);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .score-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
        }
        h1 { color: #333; }
        .subject { font-size: 18px; color: #666; margin-bottom: 10px; }
        .score {
            font-size: 60px;
            font-weight: bold;
            color: #ff6b6b;
            margin: 20px 0;
        }
        .total { font-size: 18px; color: #666; }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn:hover { background: #5a67d8; }
        .btn.secondary { background: #6c757d; }
        .btn.secondary:hover { background: #5a6268; }
    </style>
</head>
<body>
    <div class="score-container">
        <h1>Test Completed!</h1>
        <div class="subject">
            <?php if ($test_type === 'chapter'): ?>
                Subject: <?php echo htmlspecialchars($subject); ?> | Chapter: <?php echo htmlspecialchars($chapter); ?>
            <?php else: ?>
                Test Type: <?php echo ucfirst($test_type); ?> Test
            <?php endif; ?>
        </div>
        <div class="score"><?php echo $score; ?>/<?php echo $question_count; ?></div>
        <div class="total">You answered <?php echo $score; ?> out of <?php echo $question_count; ?> questions correctly.</div>
        <br>
        <a href="user_interface.php" class="btn">Restart Test</a>
        <a href="profile.php" class="btn secondary">Go to Profile</a>
    </div>
</body>
</html>