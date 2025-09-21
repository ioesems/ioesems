<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ./login_register/login.php");
    exit();
}

include './database/config.php';

// Handle "Start Set Test"
if (isset($_GET['start_set']) && $_GET['start_set'] === 'true') {
    $_SESSION['test_type'] = 'set';
    $_SESSION['test_subject'] = 'Full Syllabus';
    $_SESSION['test_question_count'] = 100;
    $_SESSION['time_limit_minutes'] = 120; // 2 hours for set test
    header("Location: route_question_handler.php");
    exit();
}

// Handle "Start Chapter Test" — will redirect to chapter_wise_test.php
if (isset($_GET['start_chapter']) && $_GET['start_chapter'] === 'true') {
    header("Location: ./tests/chapter_wise_test.php");
    exit();
}

// Handle form submission (user submits answers)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answers'])) {
    $_SESSION['user_answers'] = $_POST['answers'];
    header("Location: ./scores/score.php");
    exit();
}

// Handle Chapter-wise test start (from chapter_wise_test.php)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['start_test'])) {
    $subject = trim($_POST['subject'] ?? 'General');
    $chapter = trim($_POST['chapter'] ?? '');
    $count = intval($_POST['question_count'] ?? 20);

    // Validate count
    $allowed_counts = [5, 10, 20, 50, 100];
    if (!in_array($count, $allowed_counts)) {
        $count = 20;
    }

    // Set time limit: 1.2 min per question (IOE standard)
    $time_limit_minutes = ceil($count * 1.2);

    $_SESSION['test_type'] = 'chapter';
    $_SESSION['test_subject'] = $subject;
    $_SESSION['test_chapter'] = $chapter;
    $_SESSION['test_question_count'] = $count;
    $_SESSION['time_limit_minutes'] = $time_limit_minutes;

    // Route to appropriate handler based on admin setting
    $stmt = $pdo->prepare("SELECT question_source FROM system_settings WHERE id = 1");
    $stmt->execute();
    $setting = $stmt->fetch();
    $question_source = $setting ? $setting['question_source'] : 'ai_only';

    if ($question_source === 'local_only') {
        header("Location: ./question_fetching/local_question_fetch.php");
        exit();
    } elseif ($question_source === 'ai_local') {
        header("Location: ./question_fetching/hybrid_question_fetching.php");
        exit();
    } else { // ai_only
        header("Location: ./ai/send_to_ai.php");
        exit();
    }
}

// Check if questions are ready in session
$questions = $_SESSION['mcq_questions'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOE Entrance MCQ Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fa;
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
            margin-bottom: 30px;
        }

        .test-type-btn {
            display: block;
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .test-type-btn:hover {
            background: #218838;
        }

        .test-type-btn.set {
            background: #007bff;
        }

        .test-type-btn.set:hover {
            background: #0056b3;
        }

        .test-type-btn.chapter {
            background: #ffc107;
            color: #333;
        }

        .test-type-btn.chapter:hover {
            background: #e0a800;
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
    </style>
</head>

<body>

  <!-- for insufficient questions in the database  -->
    <?php if (isset($_SESSION['error_message'])): ?>
        <div
            style="max-width: 800px; margin: 20px auto; padding: 20px; background: #fff3cd; border: 1px solid #ffeaa7; border-radius: 10px; color: #856404; font-weight: bold; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <?php echo htmlspecialchars($_SESSION['error_message']); ?>
            <?php unset($_SESSION['error_message']); ?>
        </div>
    <?php endif; ?>


    
    <div class="container">
        <h1>IOE Entrance MCQ Test</h1>

        <?php if (!$questions): ?>
            <a href="?start_set=true" class="test-type-btn set">
                🎯 Set-wise Test (100 Qs, 2 Hours)
            </a>
            <a href="?start_chapter=true" class="test-type-btn chapter">
                📚 Chapter-wise Test (Custom)
            </a>
            <a href="./tests/daily_test.php" class="test-type-btn" style="background: #e74c3c;">
                🏆 Daily Challenge (20 Qs, 30 Min)
            </a>
        <?php else: ?>
            <div class="timer" id="countdown">Loading...</div>

            <form method="POST" action="user_interface.php" id="test-form">
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

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    let totalMinutes = <?php echo $_SESSION['time_limit_minutes']; ?>;
                    let timeLeft = totalMinutes * 60; // Convert to seconds
                    const timerElement = document.getElementById('countdown');
                    const form = document.getElementById('test-form');

                    const timer = setInterval(() => {
                        timeLeft--;

                        // Format as HH:MM:SS
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

                        timerElement.textContent = display;

                        if (timeLeft <= 0) {
                            clearInterval(timer);
                            alert('⏰ Time is up! Your test will be auto-submitted.');
                            form.submit();
                        }
                    }, 1000);
                });
            </script>
        <?php endif; ?>
    </div>
</body>

</html>