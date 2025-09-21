<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../login_register/login.php");
    exit();
}

include '../contents_of_ioe_entrance/syllabus.php';

// Handle form submission to start test
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['start_test'])) {
    $subject = $_POST['subject'];
    $chapter = $_POST['chapter'];
    $count = intval($_POST['question_count']);

    // Validate
    if (!isset($ioe_syllabus[$subject]) || !in_array($chapter, $ioe_syllabus[$subject])) {
        die("Invalid subject or chapter.");
    }

    $allowed_counts = [5, 10, 20, 50, 100];
    if (!in_array($count, $allowed_counts)) $count = 20;

    // Calculate time: 1.2 min per question (72 seconds) — IOE standard
    $time_limit_minutes = ceil($count * 1.2);

    $_SESSION['test_type'] = 'chapter';
    $_SESSION['test_subject'] = $subject;
    $_SESSION['test_chapter'] = $chapter;
    $_SESSION['test_question_count'] = $count;
    $_SESSION['time_limit_minutes'] = $time_limit_minutes;

    header("Location: ../route_question_handler.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter-wise Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 { text-align: center; color: #333; margin-bottom: 30px; }
        .form-group { margin: 20px 0; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; }
        .start-btn {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 15px;
            background: #ffc107;
            color: #333;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .start-btn:hover { background: #e0a800; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Chapter-wise Test</h1>
        <form method="POST" action="chapter_wise_test.php">
            <div class="form-group">
                <label for="subject">Select Subject:</label>
                <select name="subject" id="subject" required onchange="updateChapters()">
                    <option value="">-- Select Subject --</option>
                    <?php foreach ($ioe_syllabus as $subject => $chapters): ?>
                        <option value="<?php echo htmlspecialchars($subject); ?>"><?php echo htmlspecialchars($subject); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="chapter">Select Chapter:</label>
                <select name="chapter" id="chapter" required>
                    <option value="">-- First select subject --</option>
                </select>
            </div>

            <div class="form-group">
                <label for="question_count">Number of Questions:</label>
                <select name="question_count" id="question_count" required>
                    <option value="5">5 Questions</option>
                    <option value="10">10 Questions</option>
                    <option value="20" selected>20 Questions</option>
                    <option value="50">50 Questions</option>
                    <option value="100">100 Questions</option>
                </select>
            </div>

            <button type="submit" name="start_test" class="start-btn">Start Test</button>
        </form>

        <a href="../user_interface.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #007bff;">
            ← Back to Main Menu
        </a>
    </div>

    <script>
        const syllabus = <?php echo json_encode($ioe_syllabus); ?>;
        
        function updateChapters() {
            const subjectSelect = document.getElementById('subject');
            const chapterSelect = document.getElementById('chapter');
            const selectedSubject = subjectSelect.value;
            
            chapterSelect.innerHTML = '<option value="">-- Select Chapter --</option>';
            
            if (selectedSubject && syllabus[selectedSubject]) {
                syllabus[selectedSubject].forEach(chapter => {
                    const option = document.createElement('option');
                    option.value = chapter;
                    option.textContent = chapter;
                    chapterSelect.appendChild(option);
                });
            }
        }
    </script>
</body>
</html>