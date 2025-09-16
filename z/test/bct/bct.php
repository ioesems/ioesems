<?php
// bct.php

// Include subjects list
include 'bct_subject.php';

// Mapping semester numbers to labels
$semLabels = [
    1 => "I/I",
    2 => "I/II",
    3 => "II/I",
    4 => "II/II",
    5 => "III/I",
    6 => "III/II",
    7 => "IV/I",
    8 => "IV/II"
];

// Get semester and subject from query parameters
$sem = isset($_GET['sem']) ? (int) $_GET['sem'] : null;
$subject = isset($_GET['subject']) ? $_GET['subject'] : null;

$title = "BCT Curriculum";
$subtitle = "";

// If no semester selected → show semester list
if (!$sem) {
    $title = "All Semesters";
    $subtitle = "Click on any semester to view its subjects.";
}

// If semester is selected but no subject → show subjects
elseif ($sem && !$subject) {
    $title = "Semester " . ($semLabels[$sem] ?? $sem) . " Subjects";
    $subtitle = "Click on a subject to view its resources.";
}

// If subject selected → redirect to its page file
elseif ($sem && $subject) {
    // Convert subject name to folder-friendly string
    $folder = strtolower(str_replace(" ", "_", $subject));
    $page = "sem{$sem}/" . $folder . "/" . $folder . "_page.php";

    // Redirect
    header("Location: $page");
    exit;
}

// Include header
include '../../../components/head-foot/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($title); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        padding-top: 70px;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(120deg, #fef9c3, #d9f99d);
        color: #1b3a1a;
    }
    h2 {
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }
    .card {
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: 0.2s;
    }
    .card:hover { transform: translateY(-5px); }
    .card-body a {
        display: block;
        padding: 15px;
        text-decoration: none;
        color: #fff;
        border-radius: 12px;
        background: linear-gradient(135deg, #a8e063, #56ab2f);
    }
  </style>
</head>
<body>

<div class="container mt-3">
    <?php if ($subtitle): ?>
        <h3 class="text-muted text-center"><?php echo htmlspecialchars($subtitle); ?></h3>
    <?php endif; ?>
    <h2><?php echo htmlspecialchars($title); ?></h2>

    <div class="row justify-content-center g-3">
        <?php
        // Case 1: Show all semesters
        if (!$sem) {
            foreach ($semLabels as $num => $label) {
                echo '
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="?sem=' . $num . '">' . $label . '</a>
                        </div>
                    </div>
                </div>';
            }
        }

        // Case 2: Show subjects of a semester
        elseif ($sem && isset($subjects[$sem])) {
            foreach ($subjects[$sem] as $subj) {
                echo '
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="?sem=' . $sem . '&subject=' . urlencode($subj) . '">' . htmlspecialchars($subj) . '</a>
                        </div>
                    </div>
                </div>';
            }
        }
        ?>
    </div>
</div>

<?php include '../../../components/head-foot/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
