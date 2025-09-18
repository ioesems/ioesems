<?php
include 'send_to_ai.php';
include 'receive_from_ai.php';

if (!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = null;
}

$errorMessage = '';
$questionData = null;
$feedbackData = null;
$selectedOption = null;

// ================================
// HANDLE: Generate New Question
// ================================
if (isset($_POST['action']) && $_POST['action'] === 'generate_question') {
    $subject = $_POST['subject'] ?? "Operating System";

    $styles = [
        "funny meme-style", "absurd and hilarious", "unexpected twist",
        "pop culture reference", "silly but educational", "wacky analogy",
        "pun-filled and goofy", "cartoon-style logic", "sci-fi themed",
        "based on a viral trend", "riddle-style", "with emojis 😜",
        "as if explained by a pirate 🏴‍☠️", "like a stand-up comedy joke"
    ];
    $randomStyle = $styles[array_rand($styles)];
    $timestamp = time();

    $systemPrompt = "You are a fun, witty teacher who creates hilarious but educational multiple-choice questions.";
    $userPrompt = "Subject: $subject\n" .
                  "Create a BRAND NEW, UNIQUE, and $randomStyle multiple-choice question.\n" .
                  "❗ RULE: Question under 10 words. Each option under 6 words.\n" .
                  "One correct, others funny/wrong but plausible. DO NOT REPEAT.\n" .
                  "Timestamp: $timestamp\n" .
                  "Return JSON: {\"question\": \"...\", \"options\": {\"A\":\"...\",\"B\":\"...\",\"C\":\"...\",\"D\":\"...\"}, \"correct_answer\": \"A\"}";

    $messages = [
        ['role' => 'system', 'content' => $systemPrompt],
        ['role' => 'user', 'content' => $userPrompt]
    ];

    $aiRawResponse = sendToGroqAI($messages);

    if (isset($aiRawResponse['error'])) {
        $errorMessage = $aiRawResponse['error'];
    } else {
        $formatted = formatQuestionResponse($aiRawResponse);
        if (isset($formatted['error'])) {
            $errorMessage = $formatted['error'];
        } else {
            $_SESSION['current_question'] = $formatted;
            $questionData = $formatted;
        }
    }
}

// ================================
// HANDLE: User Submitted Answer
// ================================
if (isset($_POST['action']) && $_POST['action'] === 'submit_answer') {
    $selectedOption = $_POST['selected_option'] ?? '';
    $questionData = $_SESSION['current_question'];

    if (!$questionData || empty($selectedOption)) {
        $errorMessage = "No active question or no option selected.";
    } else {
        $systemPrompt = "You are a fun, encouraging teacher. Give a hilarious 1-sentence reaction, then a clear educational explanation.";
        $userPrompt = "User selected: \"$selectedOption\"\n" .
                      "Question: {$questionData['question']}\n" .
                      "Options: " . json_encode($questionData['options']) . "\n" .
                      "Correct Answer: {$questionData['correct_answer']}\n\n" .
                      "Respond in strict JSON format:\n" .
                      "{\"fun_feedback\": \"string\", \"detailed_explanation\": \"string\"}";

        $messages = [
            ['role' => 'system', 'content' => $systemPrompt],
            ['role' => 'user', 'content' => $userPrompt]
        ];

        $aiRawResponse = sendToGroqAI($messages);

        if (isset($aiRawResponse['error'])) {
            $errorMessage = $aiRawResponse['error'];
        } else {
            $formatted = formatFeedbackResponse($aiRawResponse);
            if (isset($formatted['error'])) {
                $errorMessage = $formatted['error'];
            } else {
                $feedbackData = $formatted;
                $_SESSION['current_question'] = null;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎮 Fun Quiz Challenge</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h1>🎲 Fun Quiz Challenge</h1>

    <?php if (isset($errorMessage)): ?>
        <div class="error">⚠️ <?= htmlspecialchars($errorMessage) ?></div>
    <?php endif; ?>

    <?php if (isset($feedbackData)): ?>
        <!-- FEEDBACK + SCORE BUTTONS -->
        <div class="feedback-box">
            <div class="fun">🎉 <?= $feedbackData['fun_feedback'] ?></div>
            <div class="details">
                <strong>📚 Detailed Explanation:</strong>
                <p><?= nl2br($feedbackData['detailed_explanation']) ?></p>
            </div>

            <?php
            $isCorrect = ($selectedOption === $questionData['correct_answer']) ? 1 : 0;
            $subjectUsed = $_POST['subject'] ?? 'Operating System';

            // Initialize or update current session
            if (!isset($_SESSION['current_session'])) {
                $_SESSION['current_session'] = ['correct' => 0, 'total' => 0, 'subject' => $subjectUsed];
            }

            $_SESSION['current_session']['total']++;
            if ($isCorrect) $_SESSION['current_session']['correct']++;

            $currentCorrect = $_SESSION['current_session']['correct'];
            $currentTotal = $_SESSION['current_session']['total'];
            ?>

            <!-- Dual Button Layout -->
            <div style="margin-top: 30px; display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; align-items: center;">

                <!-- BUTTON 1: Try Another -->
                <form method="POST" action="index.php" style="display: inline-block;">
                    <input type="hidden" name="action" value="generate_question">
                    <input type="hidden" name="subject" value="<?= htmlspecialchars($subjectUsed) ?>">
                    <button type="submit" class="btn" style="background: #0077ff; padding: 12px 24px; font-weight: 600;">
                        🔄 Try Another Fun Question
                    </button>
                </form>

                <!-- BUTTON 2: Stop & See Score -->
                <form method="POST" action="score.php" style="display: inline-block;">
                    <input type="hidden" name="is_correct" value="<?= $isCorrect ?>">
                    <input type="hidden" name="subject" value="<?= htmlspecialchars($subjectUsed) ?>">
                    <input type="hidden" name="session_correct" value="<?= $currentCorrect ?>">
                    <input type="hidden" name="session_total" value="<?= $currentTotal ?>">
                    <input type="hidden" name="redirect" value="profile">
                    <button type="submit" class="btn" style="background: #28a745; padding: 12px 24px; font-weight: 600;">
                        🛑 Stop & See My Score
                    </button>
                </form>

            </div>
        </div>

        <script>
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function() {
                const redirectInput = this.querySelector('input[name="redirect"]');
                if (redirectInput && redirectInput.value === 'profile') {
                    const btn = this.querySelector('button');
                    btn.disabled = true;
                    btn.innerHTML = '💾 Saving...';
                }
            });
        });
        </script>

    <?php elseif (isset($questionData)): ?>
        <!-- SHOW QUESTION + OPTIONS -->
        <div class="question-box">
            <h2><?= $questionData['question'] ?></h2>
            <form method="POST" action="index.php">
                <input type="hidden" name="action" value="submit_answer">
                <input type="hidden" name="subject" value="<?= htmlspecialchars($_POST['subject'] ?? 'Operating System') ?>">
                <?php foreach ($questionData['options'] as $key => $option): ?>
                    <label>
                        <input type="radio" name="selected_option" value="<?= $key ?>" required>
                        <strong><?= $key ?>:</strong> <?= $option ?>
                    </label><br>
                <?php endforeach; ?>
                <button type="submit" class="btn">✅ Submit Answer</button>
            </form>
        </div>

    <?php else: ?>
        <!-- START SCREEN -->
        <?php
        // Reset session counter when starting fresh
        unset($_SESSION['current_session']);
        ?>
        <form method="POST" action="index.php">
            <input type="hidden" name="action" value="generate_question">
            <label><strong>📚 Pick a Subject:</strong></label><br><br>
            <select name="subject" style="padding:10px; font-size:1.1rem; margin-right:15px; border-radius:6px; border:2px solid #ddd;">
                <option value="Operating System">Operating System</option>
                <option value="Computer Networks">Computer Networks</option>
                <option value="Database Management">Database Management</option>
                <option value="Python Programming">Python Programming</option>
                <option value="Data Structures">Data Structures</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Cyber Security">Cyber Security</option>
                <option value="Web Development">Web Development</option>
            </select>
            <button type="submit" class="btn btn-large">🚀 Generate Fun Question</button>
        </form>

        <div style="margin-top: 30px;">
            <a href="profile.php" style="display: inline-block; padding: 12px 24px; background: #28a745; color: white; text-decoration: none; border-radius: 8px; font-weight: bold;">
                📊 View My Progress
            </a>
        </div>
    <?php endif; ?>

</div>

</body>
</html>