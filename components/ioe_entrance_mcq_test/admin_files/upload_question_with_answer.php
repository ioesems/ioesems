<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include '../database/config.php';

// Check if user is admin
$stmt = $pdo->prepare("SELECT is_admin FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
if (!$user || !$user['is_admin']) {
    die("Access denied. Admin only.");
}

include '../contents_of_ioe_entrance/syllabus.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = $_POST['subject'] ?? '';
    $chapter = $_POST['chapter'] ?? '';
    $question_text = $_POST['question_text'] ?? '';
    $option_a = $_POST['option_a'] ?? '';
    $option_b = $_POST['option_b'] ?? '';
    $option_c = $_POST['option_c'] ?? '';
    $option_d = $_POST['option_d'] ?? '';
    $correct_answer = $_POST['correct_answer'] ?? '';
    $explanation = $_POST['explanation'] ?? '';
    $marks = intval($_POST['marks'] ?? 1);
    $difficulty = $_POST['difficulty'] ?? 'Medium';

    // Validate
    if (empty($subject) || empty($chapter) || empty($question_text) || empty($correct_answer) || !in_array($correct_answer, ['A','B','C','D'])) {
        $message = "Please fill all required fields.";
    } else {
        $question_image = null;
        $explanation_image = null;

        // Handle question image upload
        if (isset($_FILES['question_image']) && $_FILES['question_image']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'uploads/questions/';
            if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
            
            $ext = pathinfo($_FILES['question_image']['name'], PATHINFO_EXTENSION);
            $filename = 'q_' . time() . '_' . rand(1000,9999) . '.' . $ext;
            $filepath = $upload_dir . $filename;
            
            if (move_uploaded_file($_FILES['question_image']['tmp_name'], $filepath)) {
                $question_image = $filepath;
            }
        }

        // Handle explanation image upload
        if (isset($_FILES['explanation_image']) && $_FILES['explanation_image']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'uploads/explanations/';
            if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
            
            $ext = pathinfo($_FILES['explanation_image']['name'], PATHINFO_EXTENSION);
            $filename = 'e_' . time() . '_' . rand(1000,9999) . '.' . $ext;
            $filepath = $upload_dir . $filename;
            
            if (move_uploaded_file($_FILES['explanation_image']['tmp_name'], $filepath)) {
                $explanation_image = $filepath;
            }
        }

        try {
            $stmt = $pdo->prepare("
                INSERT INTO local_questions 
                (subject, chapter, question_text, question_image, option_a, option_b, option_c, option_d, 
                 correct_answer, explanation, explanation_image, marks, difficulty, created_by)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([
                $subject, $chapter, $question_text, $question_image, $option_a, $option_b, $option_c, $option_d,
                $correct_answer, $explanation, $explanation_image, $marks, $difficulty, $_SESSION['user_id']
            ]);

            $message = "Question uploaded successfully!";
        } catch (Exception $e) {
            $message = "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Question - Admin</title>
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
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 { text-align: center; color: #333; margin-bottom: 30px; }
        .form-group { margin: 20px 0; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        textarea { height: 100px; }
        .image-preview {
            margin: 10px 0;
            max-width: 300px;
            max-height: 200px;
        }
        .submit-btn {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 15px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .submit-btn:hover { background: #218838; }
        .message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📤 Upload Question (Admin)</h1>

        <?php if ($message): ?>
            <div class="message <?php echo strpos($message, 'Error') !== false ? 'error' : 'success'; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data" action="upload_question_with_answer.php">
            <div class="form-group">
                <label for="subject">Subject:</label>
                <select name="subject" id="subject" required onchange="updateChapters()">
                    <option value="">-- Select Subject --</option>
                    <?php foreach ($ioe_syllabus as $subject => $chapters): ?>
                        <option value="<?php echo htmlspecialchars($subject); ?>"><?php echo htmlspecialchars($subject); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="chapter">Chapter:</label>
                <select name="chapter" id="chapter" required>
                    <option value="">-- First select subject --</option>
                </select>
            </div>

            <div class="form-group">
                <label for="question_text">Question Text:</label>
                <textarea name="question_text" id="question_text" required></textarea>
            </div>

            <div class="form-group">
                <label for="question_image">Question Image (Optional):</label>
                <input type="file" name="question_image" id="question_image" accept="image/*">
                <img id="question_image_preview" class="image-preview" style="display:none;">
            </div>

            <div class="form-group">
                <label for="option_a">Option A:</label>
                <textarea name="option_a" id="option_a" required></textarea>
            </div>

            <div class="form-group">
                <label for="option_b">Option B:</label>
                <textarea name="option_b" id="option_b" required></textarea>
            </div>

            <div class="form-group">
                <label for="option_c">Option C:</label>
                <textarea name="option_c" id="option_c" required></textarea>
            </div>

            <div class="form-group">
                <label for="option_d">Option D:</label>
                <textarea name="option_d" id="option_d" required></textarea>
            </div>

            <div class="form-group">
                <label for="correct_answer">Correct Answer:</label>
                <select name="correct_answer" id="correct_answer" required>
                    <option value="">-- Select --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>

            <div class="form-group">
                <label for="explanation">Explanation (Optional):</label>
                <textarea name="explanation" id="explanation"></textarea>
            </div>

            <div class="form-group">
                <label for="explanation_image">Explanation Image (Optional):</label>
                <input type="file" name="explanation_image" id="explanation_image" accept="image/*">
                <img id="explanation_image_preview" class="image-preview" style="display:none;">
            </div>

            <div class="form-group">
                <label for="marks">Marks:</label>
                <input type="number" name="marks" id="marks" value="1" min="1" max="5">
            </div>

            <div class="form-group">
                <label for="difficulty">Difficulty:</label>
                <select name="difficulty" id="difficulty">
                    <option value="Easy">Easy</option>
                    <option value="Medium" selected>Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">Upload Question</button>
        </form>

        <a href="admin.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #007bff;">
            ← Back to Admin Panel
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

        // Image preview
        document.getElementById('question_image').addEventListener('change', function(e) {
            const preview = document.getElementById('question_image_preview');
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('explanation_image').addEventListener('change', function(e) {
            const preview = document.getElementById('explanation_image_preview');
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>