<?php
header("Content-Type: text/html; charset=utf-8");

// ===== PAGE METADATA =====
$pageTitle = "[Subject Name] Syllabus"; // e.g., "Electromagnetics", "Engineering Mathematics II"
$subtitle = "[Brief descriptor for header]"; // e.g., "Second Year Engineering Curriculum"

// ===== COURSE OBJECTIVES =====
$courseObjectives = "[1–3 sentence description of course goals. Example: To introduce students to core principles of... and enable them to apply...]";

// ===== TOPICS COVERED =====
// Format: Array of topic sections. Each section has 'title' and 'items' array.
$topics = [
    [
        'title' => '[Section Number]. [Section Title] ([X] hours)',
        'items' => [
            '[X.X] [Topic detail 1]',
            '[X.X] [Topic detail 2]',
            // ... add more items
        ]
    ],
    // ... repeat for each major section
];

// ===== TUTORIALS =====
$tutorialHours = [Number]; // e.g., 15
$tutorials = [
    '[Tutorial activity 1]',
    '[Tutorial activity 2]',
    // ... add more
];

// ===== PRACTICAL SESSIONS =====
$practicalHours = [Number]; // e.g., 15
$practicals = [
    '[Lab/Practical activity 1]',
    '[Lab/Practical activity 2]',
    // ... add more
];

// ===== EXAM PATTERN =====
$examPattern = [
    ['chapter' => '[Ch #]', 'hours' => '[#]', 'marks' => '[#]'],
    // ... repeat per chapter
];
$totalHours = [Sum_of_hours]; // e.g., 45
$totalMarks = [Total_marks];  // e.g., 60

// ===== REFERENCES =====
$references = [
    '[Author]. ([Year]). [Book Title]. [Publisher].',
    // ... add more references
];

// ⚠️ DO NOT MODIFY BELOW THIS LINE — connects to viewer
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/syllabus_viewer.php';
?>