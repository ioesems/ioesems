<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$user_id = $_SESSION['user_id'];

// Set Nepal Timezone
date_default_timezone_set('Asia/Kathmandu');

// Prevent infinite loop - if we just came from fetch and still no questions, go to main interface
if (isset($_SESSION['fetch_attempted']) && !isset($_SESSION['daily_questions'])) {
    unset($_SESSION['fetch_attempted']);
    $_SESSION['error_message'] = "Unable to load daily challenge questions. Please try again later or contact admin.";
    header("Location: user_interface.php");
    exit();
}

// Check if user already took test today
$stmt = $pdo->prepare("SELECT COUNT(*) FROM daily_test_logs WHERE user_id = ? AND DATE(attempted_at) = ?");
$stmt->execute([$user_id, date('Y-m-d')]);
$has_taken_today = $stmt->fetchColumn() > 0;

// Handle form submission (manual or auto)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answers'])) {
    $questions = $_SESSION['daily_questions'] ?? [];
    $user_answers = $_POST['answers'] ?? [];

    if (empty($questions)) {
        $_SESSION['error_message'] = "No questions found. Please try again or contact admin.";
        header("Location: user_interface.php");
        exit();
    }

    $score = 0;
    foreach ($questions as $index => $q) {
        $correct_key = $q['correct_answer'];
        $user_choice_key = $user_answers[$index] ?? '';
        $correct_index = array_search($correct_key, ['A', 'B', 'C', 'D']);
        $user_index = (int) $user_choice_key;
        if ($user_index === $correct_index)
            $score++;
    }

    // Save to daily_test_logs
    $stmt = $pdo->prepare("INSERT INTO daily_test_logs (user_id, score, total_questions) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $score, count($questions)]);

    // Also save to main test_results for history
    $stmt = $pdo->prepare("INSERT INTO test_results (user_id, score, total_questions, subject, test_type, question_count) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $score, count($questions), 'Daily Challenge', 'daily', 20]);

    unset($_SESSION['daily_questions']);

    // Redirect to score page
    $_SESSION['daily_score'] = $score;
    $_SESSION['daily_total'] = count($questions);
    header("Location: daily_score.php");
    exit();
}

// If not taken today and no questions in session, fetch new ones
if (!$has_taken_today && !isset($_SESSION['daily_questions'])) {
    $_SESSION['time_limit_minutes'] = 30;
    $_SESSION['fetch_attempted'] = true; // Prevent infinite loops
    header("Location: daily_fetch_questions.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Challenge</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .timer {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
            margin: 20px 0;
            background: #fff3cd;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ffeaa7;
        }
        .question {
            margin-bottom: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-left: 4px solid #007bff;
            border-radius: 5px;
        }
        .options label {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background: #e9ecef;
            border-radius: 5px;
            cursor: pointer;
        }
        .options input {
            margin-right: 10px;
        }
        .submit-btn {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background: #0056b3;
        }
        .message {
            text-align: center;
            padding: 20px;
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 5px;
            margin: 20px 0;
        }
        .nav-link {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 20px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .nav-link:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>

    <!-- Error message display -->
    <?php if (isset($_SESSION['error_message'])): ?>
        <div style="max-width: 800px; margin: 20px auto; padding: 20px; background: #fff3cd; border: 1px solid #ffeaa7; border-radius: 10px; color: #856404; font-weight: bold; text-align: center;">
            <?php 
                echo htmlspecialchars($_SESSION['error_message']); 
                unset($_SESSION['error_message']);
            ?>
            <br><br>
            <a href="user_interface.php" class="nav-link">← Back to Main Menu</a>
        </div>
    <?php endif; ?>

    <div class="container">
        <h1>🏆 Daily Challenge</h1>

        <?php if ($has_taken_today): ?>
            <div class="message">
                <h3>✅ You've already taken today's challenge!</h3>
                <p>Come back after <?php echo date('Y-m-d H:i:s', strtotime('tomorrow 00:00:00')); ?> (Nepal Time) for the next one.</p>
                <a href="profile.php" class="submit-btn" style="margin-top: 20px;">View Profile</a>
            </div>
        <?php else: ?>
            <?php
            $questions = $_SESSION['daily_questions'] ?? [];
            if (empty($questions)) {
                // If we already attempted fetch, break the loop
                if (isset($_SESSION['fetch_attempted'])) {
                    unset($_SESSION['fetch_attempted']);
                    $_SESSION['error_message'] = "Failed to load daily challenge. Please try again later.";
                    header("Location: user_interface.php");
                    exit();
                }
                
                echo '<div class="message">';
                echo '<h3>⏳ Loading your daily challenge...</h3>';
                echo '<p>If this takes more than 30 seconds, please <a href="daily_fetch_questions.php">click here to retry</a>.</p>';
                echo '<a href="user_interface.php" class="nav-link">← Back to Main Menu</a>';
                echo '</div>';
                exit();
            }
            ?>

            <div class="timer" id="countdown">Loading...</div>

            <form method="POST" action="daily_test.php" id="test-form">
                <?php foreach ($questions as $index => $q): ?>
                    <div class="question">
                        <h3>Q<?php echo $index + 1; ?>: <?php echo htmlspecialchars($q['question']); ?></h3>
                        <div class="options">
                            <?php foreach ($q['options'] as $key => $option): ?>
                                <label>
                                    <input type="radio" name="answers[<?php echo $index; ?>]" value="<?php echo $key; ?>" required>
                                    <?php echo htmlspecialchars($option); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <button type="submit" class="submit-btn">Submit Test</button>
            </form>
        <?php endif; ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Check if time_limit_minutes is set
            const totalMinutes = <?php echo isset($_SESSION['time_limit_minutes']) ? (int)$_SESSION['time_limit_minutes'] : 30; ?>;
            let timeLeft = totalMinutes * 60; // Convert to seconds
            const timerElement = document.getElementById('countdown');
            const form = document.getElementById('test-form');

            // Update display immediately
            updateTimerDisplay();

            const timer = setInterval(() => {
                timeLeft--;
                updateTimerDisplay();

                if (timeLeft <= 0) {
                    clearInterval(timer);
                    alert('⏰ Time is up! Your test will be auto-submitted.');
                    form.submit();
                }
            }, 1000);

            function updateTimerDisplay() {
                const hours = Math.floor(timeLeft / 3600);
                const minutes = Math.floor((timeLeft % 3600) / 60);
                const seconds = timeLeft % 60;

                let display = '';
                if (hours > 0) {
                    display = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                } else if (minutes > 0) {
                    display = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                } else {
                    display = `${seconds.toString().padStart(2, '0')}s`;
                }

                if (timerElement) {
                    timerElement.textContent = display;
                }
            }
        });
    </script>
</body>
</html>