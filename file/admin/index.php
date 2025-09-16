<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// Include the configuration file to connect to the database
include 'config.php';

// Check if the connection was successful
if ($conn === null || $conn->connect_error) {
    die("Database connection failed: " . ($conn ? $conn->connect_error : 'No connection object'));
}

// Include subjects array
include 'subjects.php';

$message = '';
$message_type = '';

// Handle file deletion
if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_query = "SELECT material_file FROM materials WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->bind_result($file);
    $stmt->fetch();
    $stmt->close();

    // Delete the file from the server
    if ($file && file_exists($file)) {
        unlink($file);
    }

    // Delete the record from the database
    $delete_query = "DELETE FROM materials WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        $message = "Material deleted successfully.";
        $message_type = "success";
    } else {
        $message = "Error: " . $stmt->error;
        $message_type = "error";
    }
    $stmt->close();
}

// Determine the sort order (either 'ASC' or 'DESC')
$order = isset($_GET['order']) && $_GET['order'] == 'asc' ? 'ASC' : 'DESC';

// Build search query
$searchConditions = [];
$params = [];
$types = '';

if (isset($_GET['semester']) && $_GET['semester'] != '') {
    $searchConditions[] = "semester = ?";
    $params[] = $_GET['semester'];
    $types .= 's';
}
if (isset($_GET['subject']) && $_GET['subject'] != '') {
    $searchConditions[] = "subject = ?";
    $params[] = $_GET['subject'];
    $types .= 's';
}
if (isset($_GET['material_title']) && $_GET['material_title'] != '') {
    $searchConditions[] = "material_title = ?";
    $params[] = $_GET['material_title'];
    $types .= 's';
}

$query = "SELECT * FROM materials";
if (count($searchConditions) > 0) {
    $query .= " WHERE " . implode(" AND ", $searchConditions);
}
$query .= " ORDER BY date_of_modification $order";

$stmt = $conn->prepare($query);
if (count($params) > 0) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();

// Initialize form persistence variables
$persist_semester = '';
$persist_subject = '';
$persist_material_title = '';
$persist_custom_title = '';
$persist_description = '';
$persist_external_link = '';

// If upload was just done, restore from POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_material'])) {
    $persist_semester = $_POST['semester'] ?? '';
    $persist_subject = $_POST['subject'] ?? '';
    $persist_material_title = $_POST['material_title'] ?? '';
    $persist_custom_title = ($_POST['material_title'] === 'CUSTOM') ? ($_POST['custom_title'] ?? '') : '';
    $persist_description = $_POST['description'] ?? '';
    $persist_external_link = $_POST['external_link'] ?? '';
} 
// Or restore from session (if redirected after upload)
elseif (isset($_SESSION['upload_form_data'])) {
    extract($_SESSION['upload_form_data']);
    unset($_SESSION['upload_form_data']); // Clear after use
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Material Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <style>
        :root {
            --primary-green: #2d5016;
            --light-green: #4a7c59;
            --accent-yellow: #f4d03f;
            --light-yellow: #fef9e7;
            --dark-text: #2c3e50;
            --light-gray: #f8f9fa;
            --white: #ffffff;
            --success: #28a745;
            --error: #dc3545;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--light-yellow) 0%, #fff 100%);
            color: var(--dark-text);
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
            box-shadow: 0 4px 15px rgba(45, 80, 22, 0.3);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--white) !important;
        }

        .btn-logout {
            background: var(--accent-yellow);
            color: var(--primary-green);
            border: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
        }

        .btn-logout:hover {
            background: #f1c40f;
            color: var(--primary-green);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .main-container {
            padding: 2rem 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 2rem;
            background: var(--white);
        }

        .card-header {
            background: linear-gradient(135deg, var(--light-green) 0%, var(--primary-green) 100%);
            color: var(--white);
            padding: 1.5rem;
            border: none;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--light-green);
            box-shadow: 0 0 0 0.2rem rgba(74, 124, 89, 0.25);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--light-green) 0%, var(--primary-green) 100%);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(45, 80, 22, 0.4);
        }

        .btn-warning {
            background: var(--accent-yellow);
            border: none;
            color: var(--primary-green);
            border-radius: 20px;
            font-weight: bold;
        }

        .btn-danger {
            border-radius: 20px;
        }

        .alert {
            border: none;
            border-radius: 10px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            border-left: 4px solid var(--success);
        }

        .alert-danger {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            color: #721c24;
            border-left: 4px solid var(--error);
        }

        .table-container {
            background: var(--white);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow-x: auto;
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: var(--light-yellow);
            color: var(--primary-green);
            font-weight: bold;
            border: none;
            padding: 1rem;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 0.75rem 1rem;
            vertical-align: middle;
            border-top: 1px solid #e9ecef;
        }

        .table tbody tr:hover {
            background-color: var(--light-yellow);
        }

        .badge {
            border-radius: 20px;
            padding: 0.5rem 1rem;
            font-weight: normal;
        }

        .badge-semester {
            background: var(--accent-yellow);
            color: var(--primary-green);
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .stats-container {
            margin-bottom: 2rem;
        }

        .stat-card {
            background: linear-gradient(135deg, var(--white) 0%, var(--light-yellow) 100%);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            border-left: 4px solid var(--light-green);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-green);
        }

        .stat-label {
            color: var(--dark-text);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .file-link {
            color: var(--light-green);
            text-decoration: none;
            font-weight: bold;
        }

        .file-link:hover {
            color: var(--primary-green);
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 1rem 0;
            }
            
            .card-header {
                padding: 1rem;
            }
            
            .action-buttons {
                justify-content: center;
            }
            
            .table-container {
                padding: 1rem;
            }
        }

        .upload-area {
            border: 2px dashed var(--light-green);
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            background: var(--light-yellow);
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .upload-area:hover {
            border-color: var(--primary-green);
            background: #fef5cd;
        }

        .custom-title-input {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .upload-progress-container {
            display: none;
            margin-top: 1rem;
        }

        .progress-bar-animated {
            animation: progress-bar-stripes 1s linear infinite;
        }

        .spinner-border {
            width: 1.5rem;
            height: 1.5rem;
            border-width: 0.2em;
        }

        .upload-alert {
            animation: slideIn 0.3s ease forwards;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-shield-alt"></i> Admin Dashboard
            </a>
            <div class="ms-auto">
                <a href="logout.php" class="btn btn-logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container main-container">
        <!-- Alert Messages (from deletion or other actions) -->
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $message_type == 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show">
                <i class="fas fa-<?php echo $message_type == 'success' ? 'check-circle' : 'exclamation-triangle'; ?>"></i>
                <?php echo htmlspecialchars($message); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <!-- Statistics Row -->
        <div class="row stats-container">
            <div class="col-md-3 mb-3">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $result->num_rows; ?></div>
                    <div class="stat-label">Total Materials</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stat-card">
                    <div class="stat-number"><?php echo count(array_keys($subjects)); ?></div>
                    <div class="stat-label">Semesters</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stat-card">
                    <div class="stat-number"><?php echo array_sum(array_map('count', $subjects)); ?></div>
                    <div class="stat-label">Total Subjects</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stat-card">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Material Types</div>
                </div>
            </div>
        </div>

        <!-- Upload Material Card -->
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <i class="fas fa-cloud-upload-alt"></i> Upload New Material
                </h2>
            </div>
            <div class="card-body">
                <form action="upload_material.php" method="POST" enctype="multipart/form-data" id="uploadForm">
                    <input type="hidden" name="upload_material" value="1">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="semester" class="form-label">Select Semester</label>
                            <select name="semester" id="semester" class="form-select" required>
                                <option value="">Choose Semester</option>
                                <?php foreach (array_keys($subjects) as $sem): ?>
                                    <option value="<?php echo $sem; ?>" <?php echo ($persist_semester == $sem) ? 'selected' : ''; ?>>
                                        Semester <?php echo $sem; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">Select Subject</label>
                            <select name="subject" id="subject" class="form-select" required>
                                <option value="">Choose Subject</option>
                                <?php if ($persist_semester && isset($subjects[$persist_semester])): ?>
                                    <?php foreach ($subjects[$persist_semester] as $sub): ?>
                                        <option value="<?php echo $sub; ?>" <?php echo ($persist_subject == $sub) ? 'selected' : ''; ?>>
                                            <?php echo $sub; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="material_title" class="form-label">Material Type</label>
                            <select name="material_title" id="material_title" class="form-select" required>
                                <option value="">Select Type</option>
                                <option value="NOTE" <?php echo ($persist_material_title == 'NOTE') ? 'selected' : ''; ?>>📝 Notes</option>
                                <option value="PYQ" <?php echo ($persist_material_title == 'PYQ') ? 'selected' : ''; ?>>❓ Previous Year Questions</option>
                                <option value="SYLLABUS" <?php echo ($persist_material_title == 'SYLLABUS') ? 'selected' : ''; ?>>📋 Syllabus</option>
                                <option value="LAB REPORT" <?php echo ($persist_material_title == 'LAB REPORT') ? 'selected' : ''; ?>>🔬 Lab Report</option>
                                <option value="ASSIGNMENT" <?php echo ($persist_material_title == 'ASSIGNMENT') ? 'selected' : ''; ?>>📚 Assignment</option>
                                <option value="CUSTOM" <?php echo ($persist_material_title == 'CUSTOM') ? 'selected' : ''; ?>>✏️ Custom Type</option>
                            </select>
                            <input type="text" id="custom_title" name="custom_title" class="form-control custom-title-input" 
                                   placeholder="Enter custom material type"
                                   value="<?php echo htmlspecialchars($persist_custom_title); ?>"
                                   <?php echo ($persist_material_title === 'CUSTOM') ? 'style="display:block;" required' : ''; ?>>
                        </div>
                        <div class="col-md-6">
                            <label for="file" class="form-label">Upload File</label>
                            <div class="upload-area">
                                <i class="fas fa-file-upload fa-2x mb-2" style="color: var(--light-green);"></i>
                                <input type="file" name="file" id="file" class="form-control">
                                <small class="text-muted">Supported: PDF, DOC, DOCX, PPT, PPTX, TXT, Images (Max: 50MB)</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter detailed description of the material..." required><?php echo htmlspecialchars($persist_description); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="external_link" class="form-label">External Link (Optional)</label>
                        <input type="url" name="external_link" id="external_link" class="form-control" placeholder="https://example.com/material.pdf" value="<?php echo htmlspecialchars($persist_external_link); ?>">
                        <small class="text-muted">Provide an external URL if you're not uploading a file.</small>
                    </div>

                    <div class="upload-progress-container" id="uploadProgressContainer">
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 0%" id="uploadProgressBar">0%</div>
                        </div>
                        <p class="text-center" id="uploadProgressText">Uploading...</p>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-upload"></i> Upload Material
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Search Materials Card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-search"></i> Search & Filter Materials
                </h3>
            </div>
            <div class="card-body">
                <form action="index.php" method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="semester_search" class="form-label">Semester</label>
                            <select name="semester" id="semester_search" class="form-select">
                                <option value="">All Semesters</option>
                                <?php foreach (array_keys($subjects) as $sem): ?>
                                    <option value="<?php echo $sem; ?>" <?php if (isset($_GET['semester']) && $_GET['semester'] == $sem) echo 'selected'; ?>>
                                        Semester <?php echo $sem; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="subject_search" class="form-label">Subject</label>
                            <select name="subject" id="subject_search" class="form-select">
                                <option value="">All Subjects</option>
                                <?php 
                                if (isset($_GET['semester']) && $_GET['semester'] != '') {
                                    $sel_sem = $_GET['semester'];
                                    if (isset($subjects[$sel_sem])) {
                                        foreach ($subjects[$sel_sem] as $sub) { ?>
                                            <option value="<?php echo $sub; ?>" <?php if (isset($_GET['subject']) && $_GET['subject'] == $sub) echo 'selected'; ?>>
                                                <?php echo $sub; ?>
                                            </option>
                                <?php     }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="material_title_search" class="form-label">Material Type</label>
                            <select name="material_title" id="material_title_search" class="form-select">
                                <option value="">All Types</option>
                                <option value="NOTE" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'NOTE') echo 'selected'; ?>>📝 Notes</option>
                                <option value="PYQ" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'PYQ') echo 'selected'; ?>>❓ PYQ</option>
                                <option value="SYLLABUS" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'SYLLABUS') echo 'selected'; ?>>📋 Syllabus</option>
                                <option value="LAB REPORT" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'LAB REPORT') echo 'selected'; ?>>🔬 Lab Report</option>
                                <option value="ASSIGNMENT" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'ASSIGNMENT') echo 'selected'; ?>>📚 Assignment</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-filter"></i> Apply Filters
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary ms-2">
                            <i class="fas fa-refresh"></i> Clear Filters
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Materials Table -->
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3><i class="fas fa-list"></i> Materials Library</h3>
                <div class="btn-group">
                    <a href="?order=desc<?php echo isset($_GET['semester']) ? '&semester=' . urlencode($_GET['semester']) : ''; ?><?php echo isset($_GET['subject']) ? '&subject=' . urlencode($_GET['subject']) : ''; ?><?php echo isset($_GET['material_title']) ? '&material_title=' . urlencode($_GET['material_title']) : ''; ?>" 
                       class="btn btn-outline-secondary <?php echo $order == 'DESC' ? 'active' : ''; ?>">
                        <i class="fas fa-sort-amount-down"></i> Newest First
                    </a>
                    <a href="?order=asc<?php echo isset($_GET['semester']) ? '&semester=' . urlencode($_GET['semester']) : ''; ?><?php echo isset($_GET['subject']) ? '&subject=' . urlencode($_GET['subject']) : ''; ?><?php echo isset($_GET['material_title']) ? '&material_title=' . urlencode($_GET['material_title']) : ''; ?>" 
                       class="btn btn-outline-secondary <?php echo $order == 'ASC' ? 'active' : ''; ?>">
                        <i class="fas fa-sort-amount-up"></i> Oldest First
                    </a>
                </div>
            </div>

            <?php if ($result->num_rows > 0): ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Semester</th>
                                <th>Subject</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Link/File</th>
                                <th>Upload Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><strong>#<?php echo $row['id']; ?></strong></td>
                                    <td><span class="badge badge-semester">Sem <?php echo $row['semester']; ?></span></td>
                                    <td><?php echo htmlspecialchars($row['subject']); ?></td>
                                    <td>
                                        <?php
                                        $icons = [
                                            'NOTE' => '📝',
                                            'PYQ' => '❓',
                                            'SYLLABUS' => '📋',
                                            'LAB REPORT' => '🔬',
                                            'ASSIGNMENT' => '📚'
                                        ];
                                        $icon = isset($icons[$row['material_title']]) ? $icons[$row['material_title']] : '📄';
                                        echo $icon . ' ' . htmlspecialchars($row['material_title']);
                                        ?>
                                    </td>
                                    <td>
                                        <span class="text-muted" data-bs-toggle="tooltip" title="<?php echo htmlspecialchars($row['description']); ?>">
                                            <?php echo htmlspecialchars(substr($row['description'], 0, 50)) . (strlen($row['description']) > 50 ? '...' : ''); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php 
                                        $hasFile = !empty($row['material_file']);
                                        $hasLink = !empty($row['external_link']);
                                        ?>

                                        <?php if ($hasFile && $hasLink): ?>
                                            <div class="d-flex flex-column gap-1">
                                                <a href="<?php echo htmlspecialchars($row['material_file']); ?>" target="_blank" class="file-link">
                                                    <i class="fas fa-download"></i> Download File
                                                </a>
                                                <a href="<?php echo htmlspecialchars($row['external_link']); ?>" target="_blank" class="file-link">
                                                    <i class="fas fa-external-link-alt"></i> External Link
                                                </a>
                                            </div>
                                        <?php elseif ($hasFile): ?>
                                            <a href="<?php echo htmlspecialchars($row['material_file']); ?>" target="_blank" class="file-link">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        <?php elseif ($hasLink): ?>
                                            <a href="<?php echo htmlspecialchars($row['external_link']); ?>" target="_blank" class="file-link">
                                                <i class="fas fa-external-link-alt"></i> External Link
                                            </a>
                                        <?php else: ?>
                                            <span class="text-muted">No file or link</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo date('M j, Y', strtotime($row['date_of_modification'])); ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit Material">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" 
                                               onclick="return confirm('Are you sure you want to delete this material? This action cannot be undone.')" 
                                               data-bs-toggle="tooltip" title="Delete Material">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">No materials found</h4>
                    <p class="text-muted">Upload your first material or adjust your search filters.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Show/hide custom title input on selection
        document.getElementById('material_title').addEventListener('change', function () {
            const customTitleInput = document.getElementById('custom_title');
            if (this.value === 'CUSTOM') {
                customTitleInput.style.display = 'block';
                customTitleInput.required = true;
            } else {
                customTitleInput.style.display = 'none';
                customTitleInput.required = false;
            }
        });

        // Populate subjects in the upload form based on selected semester
        document.getElementById('semester').addEventListener('change', function () {
            const semester = this.value;
            const subjectSelect = document.getElementById('subject');
            subjectSelect.innerHTML = '<option value="">Choose Subject</option>';
            if (semester) {
                const subjects = <?php echo json_encode($subjects); ?>;
                if (subjects[semester]) {
                    subjects[semester].forEach(subject => {
                        const option = document.createElement('option');
                        option.value = subject;
                        option.textContent = subject;
                        subjectSelect.appendChild(option);
                    });
                }
            }
        });

        // For the search form: update subjects based on the selected semester
        document.getElementById('semester_search').addEventListener('change', function () {
            const semester = this.value;
            const subjectSelect = document.getElementById('subject_search');
            subjectSelect.innerHTML = '<option value="">All Subjects</option>';
            if (semester) {
                const subjects = <?php echo json_encode($subjects); ?>;
                if (subjects[semester]) {
                    subjects[semester].forEach(subject => {
                        const option = document.createElement('option');
                        option.value = subject;
                        option.textContent = subject;
                        subjectSelect.appendChild(option);
                    });
                }
            }
        });

        // File upload preview and size check
        document.getElementById('file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const uploadArea = this.closest('.upload-area');
            
            if (file) {
                const fileSize = (file.size / 1024 / 1024).toFixed(2);
                const fileName = file.name;
                
                let fileInfo = uploadArea.querySelector('.file-info');
                if (!fileInfo) {
                    fileInfo = document.createElement('div');
                    fileInfo.className = 'file-info mt-2 p-2 bg-light rounded';
                    uploadArea.appendChild(fileInfo);
                }
                
                if (file.size > 50 * 1024 * 1024) {
                    fileInfo.innerHTML = `
                        <small class="text-danger">
                            <i class="fas fa-exclamation-triangle"></i> 
                            File too large! Maximum size is 50MB.
                        </small>
                    `;
                    this.value = '';
                } else {
                    fileInfo.innerHTML = `
                        <small class="text-success">
                            <i class="fas fa-check-circle"></i> 
                            <strong>${fileName}</strong> (${fileSize} MB)
                        </small>
                    `;
                }
            }
        });

        // ✅ REAL-TIME UPLOAD → HIDE PROGRESS → SHOW MESSAGE
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            const progressContainer = document.getElementById('uploadProgressContainer');
            const progressBar = document.getElementById('uploadProgressBar');
            const progressText = document.getElementById('uploadProgressText');

            // Clear any previous alerts
            const existingAlert = document.querySelector('.upload-alert');
            if (existingAlert) existingAlert.remove();

            // Show progress container
            progressContainer.style.display = 'block';
            progressBar.style.width = '0%';
            progressBar.textContent = '0%';
            progressText.textContent = 'Preparing upload...';

            const xhr = new XMLHttpRequest();

            // Track upload progress
            xhr.upload.addEventListener('progress', function(event) {
                if (event.lengthComputable) {
                    const percent = Math.round((event.loaded / event.total) * 100);
                    progressBar.style.width = percent + '%';
                    progressBar.textContent = percent + '%';
                    progressText.textContent = 'Uploading: ' + percent + '%';
                }
            });

            // Handle completion
            xhr.addEventListener('load', function() {
                // ✅ STEP 1: IMMEDIATELY HIDE PROGRESS BAR
                progressContainer.style.display = 'none';

                // ✅ STEP 2: SHOW COMPLETION MESSAGE
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-dismissible fade show upload-alert';
                alertDiv.style.marginTop = '1rem';

                if (xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            alertDiv.classList.add('alert-success');
                            alertDiv.innerHTML = `
                                <i class="fas fa-check-circle"></i> 
                                ${response.message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            `;
                        } else {
                            alertDiv.classList.add('alert-danger');
                            alertDiv.innerHTML = `
                                <i class="fas fa-exclamation-triangle"></i> 
                                ${response.message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            `;
                        }
                    } catch (e) {
                        alertDiv.classList.add('alert-danger');
                        alertDiv.innerHTML = `
                            <i class="fas fa-exclamation-triangle"></i> 
                            Upload completed but received invalid response.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        `;
                    }
                } else {
                    alertDiv.classList.add('alert-danger');
                    alertDiv.innerHTML = `
                        <i class="fas fa-exclamation-triangle"></i> 
                        Upload failed. Server error (${xhr.status}).
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                }

                // Insert alert after the (now hidden) progress container
                progressContainer.insertAdjacentElement('afterend', alertDiv);

                // Auto-hide success message after 5 seconds
                if (xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            setTimeout(() => {
                                const bsAlert = new bootstrap.Alert(alertDiv);
                                bsAlert.close();
                            }, 5000);
                        }
                    } catch (e) {
                        // Not success or not valid JSON → don't auto-hide
                    }
                }
            });

            // Handle network errors
            xhr.addEventListener('error', function() {
                progressContainer.style.display = 'none';

                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger alert-dismissible fade show upload-alert';
                alertDiv.style.marginTop = '1rem';
                alertDiv.innerHTML = `
                    <i class="fas fa-exclamation-triangle"></i> 
                    Network error. Please check your connection.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                progressContainer.insertAdjacentElement('afterend', alertDiv);
            });

            // Send the request
            xhr.open('POST', 'upload_material.php', true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.send(formData);
        });

        // Display session message (from upload_material.php after redirect)
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($_SESSION['upload_message'])): ?>
                const message = "<?php echo addslashes($_SESSION['upload_message']); ?>";
                const messageType = "<?php echo $_SESSION['upload_message_type']; ?>";
                
                const alertDiv = document.createElement('div');
                alertDiv.className = `alert alert-${messageType === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
                alertDiv.innerHTML = `
                    <i class="fas fa-${messageType === 'success' ? 'check-circle' : 'exclamation-triangle'}"></i>
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                document.querySelector('.main-container').prepend(alertDiv);

                setTimeout(() => {
                    const bsAlert = new bootstrap.Alert(alertDiv);
                    bsAlert.close();
                }, 5000);

                <?php unset($_SESSION['upload_message'], $_SESSION['upload_message_type']); ?>
            <?php endif; ?>
        });
    </script>
</body>
</html>

<?php 
$stmt->close();
$conn->close(); 
?>