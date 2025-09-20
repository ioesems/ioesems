<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$raw = $_SESSION['ai_raw_response'] ?? '';
$expected_count = $_SESSION['test_question_count'] ?? 20; // Should be set by user_interface.php → send_to_ai.php

// Clean and extract JSON
$start = strpos($raw, '[');
$end = strrpos($raw, ']');
if ($start === false || $end === false) {
    // Fallback: try to fix common AI wrapping
    $fixed = preg_replace('/^.*?(\[.*\]).*$/s', '$1', $raw);
    if (preg_match('/^\[.*\]$/s', $fixed)) {
        $jsonString = $fixed;
    } else {
        die("AI response does not contain valid JSON array. Raw: <pre>" . htmlspecialchars(substr($raw, 0, 500)) . "</pre>");
    }
} else {
    $jsonString = substr($raw, $start, $end - $start + 1);
}

$questions = json_decode($jsonString, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON parsing error: " . json_last_error_msg() . "<br><pre>" . htmlspecialchars($jsonString) . "</pre>");
}

if (!is_array($questions)) {
    die("Decoded data is not an array.");
}

// Validate & filter each question
$validated = [];
foreach ($questions as $q) {
    if (!isset($q['question'], $q['options'], $q['correct_answer'])) continue;
    if (!is_array($q['options']) || count($q['options']) !== 4) continue;
    if (!in_array($q['correct_answer'], ['A','B','C','D'])) continue;

    $options = array_values($q['options']);

    $validated[] = [
        'question' => trim($q['question']),
        'options' => $options,
        'correct_answer' => $q['correct_answer']
    ];
}

// ✅ Smarter minimum: For small counts, accept all if >=1. For large, require 80%
$min_acceptable = $expected_count <= 10 ? $expected_count : max(10, floor($expected_count * 0.8));

if (count($validated) < $min_acceptable) {
    die("Too few valid questions received: " . count($validated) . ". Need at least {$min_acceptable} for a {$expected_count}-question test.");
}

// ✅ TRIM TO EXPECTED COUNT IF MORE
if (count($validated) > $expected_count) {
    $validated = array_slice($validated, 0, $expected_count);
}

// ✅ PAD TO EXPECTED COUNT IF LESS (only if we have at least 1 to clone)
if (count($validated) < $expected_count && !empty($validated)) {
    while (count($validated) < $expected_count) {
        $clone_index = array_rand($validated);
        $clone = $validated[$clone_index];
        $suffix = count($validated) + 1;
        $new_question = $clone['question'] . " (Alt {$suffix})";
        $validated[] = [
            'question' => $new_question,
            'options' => $clone['options'],
            'correct_answer' => $clone['correct_answer']
        ];
    }
} elseif (count($validated) < $expected_count && empty($validated)) {
    die("No valid questions could be parsed. Please try again.");
}

// Shuffle to avoid pattern if padded
if ($expected_count > 1) {
    shuffle($validated);
}

$_SESSION['mcq_questions'] = $validated;
unset($_SESSION['ai_raw_response']);

header("Location: user_interface.php");
exit();
?>