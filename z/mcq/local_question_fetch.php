<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$subject = $_SESSION['test_subject'] ?? 'General';
$chapter = $_SESSION['test_chapter'] ?? '';
$count = (int)($_SESSION['test_question_count'] ?? 20);

// First, check how many questions are available
$countSql = "SELECT COUNT(*) as available FROM local_questions WHERE subject = :subject";
$countParams = ['subject' => $subject];

if (!empty($chapter)) {
    $countSql .= " AND chapter = :chapter";
    $countParams['chapter'] = $chapter;
}

try {
    $countStmt = $pdo->prepare($countSql);
    foreach ($countParams as $key => $value) {
        $countStmt->bindValue($key, $value);
    }
    $countStmt->execute();
    $countRow = $countStmt->fetch(PDO::FETCH_ASSOC);
    $available_questions = (int)$countRow['available'];

    if ($available_questions === 0) {
        $_SESSION['error_message'] = "Sorry! 😔 No questions available for subject '{$subject}'" . (!empty($chapter) ? " and chapter '{$chapter}'" : "") . ". Please try another category or switch to AI mode in Admin Panel.";
        header("Location: user_interface.php");
        exit();
    }

    if ($available_questions < $count) {
        $_SESSION['error_message'] = "Oops! 📚 Only {$available_questions} questions available for this category, but you requested {$count}. Please try a smaller number or switch to AI+Local mode in Admin Panel.";
        header("Location: user_interface.php");
        exit();
    }
} catch (Exception $e) {
    $_SESSION['error_message'] = "Database check failed: " . $e->getMessage();
    header("Location: user_interface.php");
    exit();
}

// If we have enough, fetch them
$sql = "SELECT question_text, option_a, option_b, option_c, option_d, correct_answer 
        FROM local_questions 
        WHERE subject = :subject";
$params = ['subject' => $subject];

if (!empty($chapter)) {
    $sql .= " AND chapter = :chapter";
    $params['chapter'] = $chapter;
}

$sql .= " ORDER BY RAND() LIMIT :limit";
$params['limit'] = $count;

try {
    $stmt = $pdo->prepare($sql);
    foreach ($params as $key => $value) {
        if ($key === 'limit') {
            $stmt->bindValue($key, $value, PDO::PARAM_INT);
        } else {
            $stmt->bindValue($key, $value);
        }
    }
    $stmt->execute();
    $local_db_questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $_SESSION['error_message'] = "Failed to fetch questions: " . $e->getMessage();
    header("Location: user_interface.php");
    exit();
}

$questions = [];
foreach ($local_db_questions as $q) {
    $questions[] = [
        'question' => $q['question_text'],
        'options' => [$q['option_a'], $q['option_b'], $q['option_c'], $q['option_d']],
        'correct_answer' => $q['correct_answer']
    ];
}

// Final safety check
if (count($questions) < $count) {
    $_SESSION['error_message'] = "We encountered an issue preparing your test. Only " . count($questions) . " questions loaded. Please try again or contact admin.";
    header("Location: user_interface.php");
    exit();
}

$_SESSION['mcq_questions'] = array_slice($questions, 0, $count);
unset($_SESSION['error_message']); // Clear any previous error

header("Location: user_interface.php");
exit();
?>