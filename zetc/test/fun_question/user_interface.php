<?php
// user_interface.php

include 'send_to_ai.php';
include 'receive_from_ai.php';

// Initialize session
if (!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = null;
}

$errorMessage = '';
$questionData = null;
$feedbackData = null;

// ================================
// HANDLE: Generate New Question
// ================================
if (isset($_POST['action']) && $_POST['action'] === 'generate_question') {
    // 🎓 Dynamic subject
    $subject = $_POST['subject'] ?? "Operating System";

    // 🎲 Random fun style
    $styles = [
        "funny meme-style",
        "absurd and hilarious",
        "unexpected twist",
        "pop culture reference (e.g., Marvel, Star Wars, TikTok)",
        "silly but educational",
        "wacky analogy",
        "pun-filled and goofy",
        "cartoon-style logic",
        "sci-fi themed",
        "based on a viral trend",
        "riddle-style",
        "with emojis 😜",
        "as if explained by a pirate 🏴‍☠️",
        "like a stand-up comedy joke"
    ];
    $randomStyle = $styles[array_rand($styles)];

    // 🕒 Force uniqueness
    $timestamp = time();

    $systemPrompt = "You are a fun, witty teacher who creates hilarious but educational multiple-choice questions for students.";
    $userPrompt = "Subject: $subject\n" .
                  "Create a BRAND NEW, UNIQUE, and $randomStyle multiple-choice question with exactly 4 options (A, B, C, D). " .
                  "One must be correct, others must be funny/wrong but plausible. DO NOT REPEAT ANY PREVIOUS QUESTION.\n" .
                  "Use creativity: analogies, jokes, memes, or trends. Timestamp for uniqueness: $timestamp\n" .
                  "Return in strict JSON format:\n" .
                  "{\"question\": \"string\", \"options\": {\"A\":\"...\",\"B\":\"...\",\"C\":\"...\",\"D\":\"...\"}, \"correct_answer\": \"A\"}";

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
                // ✅ CLEAR SESSION to force fresh question next time
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
        <!-- SHOW FEEDBACK -->
        <div class="feedback-box">
            <div class="fun">🎉 <?= $feedbackData['fun_feedback'] ?></div>
            <div class="details">
                <strong>📚 Detailed Explanation:</strong>
                <p><?= nl2br($feedbackData['detailed_explanation']) ?></p>
            </div>
            <form method="POST" action="index.php" style="margin-top:20px;">
                <input type="hidden" name="action" value="generate_question">
                <input type="hidden" name="subject" value="Operating System">
                <button type="submit" class="btn">✨ Try Another Fun Question</button>
            </form>
        </div>

    <?php elseif (isset($questionData)): ?>
        <!-- SHOW QUESTION + OPTIONS -->
        <div class="question-box">
            <h2><?= $questionData['question'] ?></h2>
            <form method="POST" action="index.php">
                <input type="hidden" name="action" value="submit_answer">
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
        <!-- SHOW SUBJECT SELECTOR + START BUTTON -->
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
    <?php endif; ?>

</div>

</body>
</html>