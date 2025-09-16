<?php
// receive_from_ai.php

function formatQuestionResponse($rawJson) {
    $data = json_decode($rawJson, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        return ['error' => 'Failed to parse question JSON.'];
    }

    if (!isset($data['question']) || !isset($data['options']) || !isset($data['correct_answer'])) {
        return ['error' => 'Invalid question format from AI.'];
    }

    return [
        'type' => 'question',
        'question' => htmlspecialchars($data['question']),
        'options' => array_map('htmlspecialchars', $data['options']),
        'correct_answer' => $data['correct_answer']
    ];
}

function formatFeedbackResponse($rawJson) {
    $data = json_decode($rawJson, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        return ['error' => 'Failed to parse feedback JSON.'];
    }

    if (!isset($data['fun_feedback']) || !isset($data['detailed_explanation'])) {
        return ['error' => 'Invalid feedback format from AI.'];
    }

    return [
        'type' => 'feedback',
        'fun_feedback' => htmlspecialchars($data['fun_feedback']),
        'detailed_explanation' => htmlspecialchars($data['detailed_explanation'])
    ];
}