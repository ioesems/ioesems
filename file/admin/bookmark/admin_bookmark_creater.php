<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include '../config.php';

if ($conn === null || $conn->connect_error) {
    die("Database connection failed.");
}

$message = '';
$message_type = '';

// ==============================
// SEARCH & FILTER LOGIC
// ==============================
$filters = [
    'semester' => $_GET['semester'] ?? '',
    'subject' => $_GET['subject'] ?? '',
    'material_title' => $_GET['material_title'] ?? '',
    'search' => $_GET['search'] ?? '',
    'material_id' => $_GET['material_id'] ?? ($_POST['material_id'] ?? '') // ✅ Preserve after POST
];

// Base query — only materials with files (PDFs)
$sql = "
    SELECT 
        m.*,
        COUNT(b.id) as bookmark_count
    FROM materials m
    LEFT JOIN bookmarks b ON m.id = b.material_id
    WHERE m.material_file IS NOT NULL AND m.material_file != ''
";

$params = [];
$types = '';

// Apply filters
if (!empty($filters['semester'])) {
    $sql .= " AND m.semester = ?";
    $params[] = $filters['semester'];
    $types .= 's';
}

if (!empty($filters['subject'])) {
    $sql .= " AND m.subject = ?";
    $params[] = $filters['subject'];
    $types .= 's';
}

if (!empty($filters['material_title'])) {
    $sql .= " AND m.material_title = ?";
    $params[] = $filters['material_title'];
    $types .= 's';
}

if (!empty($filters['search'])) {
    $sql .= " AND (m.subject LIKE ? OR m.material_title LIKE ? OR m.description LIKE ?)";
    $searchTerm = '%' . $filters['search'] . '%';
    $params[] = $searchTerm;
    $params[] = $searchTerm;
    $params[] = $searchTerm;
    $types .= 'sss';
}

$sql .= " GROUP BY m.id ORDER BY m.date_of_modification DESC";

// Prepare and execute
$stmt = $conn->prepare($sql);
if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result_materials = $stmt->get_result();

$materials = [];
while ($row = $result_materials->fetch_assoc()) {
    $materials[] = $row;
}
$stmt->close();

// Get unique semesters and subjects for filters
$semester_sql = "SELECT DISTINCT semester FROM materials WHERE material_file IS NOT NULL AND material_file != '' ORDER BY semester ASC";
$semester_result = $conn->query($semester_sql);
$semesters = [];
while ($row = $semester_result->fetch_assoc()) {
    $semesters[] = $row['semester'];
}

$subjects_by_semester = [];
foreach ($semesters as $sem) {
    $subj_sql = $conn->prepare("SELECT DISTINCT subject FROM materials WHERE semester = ? AND material_file IS NOT NULL AND material_file != '' ORDER BY subject ASC");
    $subj_sql->bind_param("s", $sem);
    $subj_sql->execute();
    $subj_result = $subj_sql->get_result();
    $subjects_by_semester[$sem] = [];
    while ($row = $subj_result->fetch_assoc()) {
        $subjects_by_semester[$sem][] = $row['subject'];
    }
    $subj_sql->close();
}

// ==============================
// HANDLE BOOKMARK SAVE (if posted)
// ==============================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['set_bookmarks'])) {
    $material_id = intval($_POST['material_id']);
    $titles = $_POST['bookmark_title'] ?? [];
    $pages = $_POST['bookmark_page'] ?? [];

    // Validate material exists
    $stmt = $conn->prepare("SELECT id, subject, material_title, material_file FROM materials WHERE id = ?");
    $stmt->bind_param("i", $material_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
        $message = "Material not found.";
        $message_type = "danger";
    } else {
        $material = $result->fetch_assoc();

        // ✅ Validate total pages (if PDF)


        // ✅ Validate page numbers — TEMPORARY MAX LIMIT
        // You can adjust 500 to any reasonable max page number for your PDFs
        $totalPages = 400;

        // Validate page numbers
        $hasError = false;
        foreach ($pages as $index => $pageStr) {
            $page = intval($pageStr);
            $title = trim($titles[$index] ?? '');
            if ($page < 1 || $page > $totalPages) {
                $message = "Page number {$page} is invalid. Max allowed: {$totalPages}.";
                $message_type = "danger";
                $hasError = true;
                break;
            }
            if (empty($title)) {
                $message = "Bookmark title cannot be empty.";
                $message_type = "danger";
                $hasError = true;
                break;
            }
        }



        // Validate page numbers
        $hasError = false;
        foreach ($pages as $index => $pageStr) {
            $page = intval($pageStr);
            $title = trim($titles[$index] ?? '');
            if ($page < 1 || $page > $totalPages) {
                $message = "Page number {$page} is invalid for this {$totalPages}-page document.";
                $message_type = "danger";
                $hasError = true;
                break;
            }
            if (empty($title)) {
                $message = "Bookmark title cannot be empty.";
                $message_type = "danger";
                $hasError = true;
                break;
            }
        }

        if (!$hasError) {
            // Delete existing bookmarks
            $stmt_del = $conn->prepare("DELETE FROM bookmarks WHERE material_id = ?");
            $stmt_del->bind_param("i", $material_id);
            $stmt_del->execute();

            // Insert new bookmarks
            $stmt_ins = $conn->prepare("INSERT INTO bookmarks (material_id, page_number, title) VALUES (?, ?, ?)");
            $stmt_ins->bind_param("iis", $material_id, $page, $title);

            $successCount = 0;
            foreach ($titles as $index => $title) {
                $page = intval($pages[$index] ?? 0);
                $title = trim($title);
                if ($page > 0 && !empty($title)) {
                    if ($stmt_ins->execute()) {
                        $successCount++;
                    }
                }
            }
            $stmt_ins->close();

            $message = "{$successCount} bookmark(s) saved for “{$material['material_title']}” (Subject: {$material['subject']}).";
            $message_type = "success";
        }
    }
    $stmt->close();

    // ✅ Preserve material_id in URL after save
    header("Location: admin_bookmark_creater.php?material_id={$material_id}" .
        (!empty($filters['semester']) ? "&semester=" . urlencode($filters['semester']) : '') .
        (!empty($filters['subject']) ? "&subject=" . urlencode($filters['subject']) : '') .
        (!empty($filters['material_title']) ? "&material_title=" . urlencode($filters['material_title']) : '') .
        (!empty($filters['search']) ? "&search=" . urlencode($filters['search']) : ''));
    exit();
}

// ==============================
// GET CURRENT MATERIAL (if editing)
// ==============================
$selected_material = null;
$current_bookmarks = [];
if (!empty($filters['material_id'])) {
    $material_id = intval($filters['material_id']);
    $stmt = $conn->prepare("SELECT * FROM materials WHERE id = ?");
    $stmt->bind_param("i", $material_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $selected_material = $row;

        // Fetch existing bookmarks
        $stmt_bm = $conn->prepare("SELECT * FROM bookmarks WHERE material_id = ? ORDER BY page_number ASC");
        $stmt_bm->bind_param("i", $material_id);
        $stmt_bm->execute();
        $result_bm = $stmt_bm->get_result();
        while ($bm = $result_bm->fetch_assoc()) {
            $current_bookmarks[] = $bm;
        }
        $stmt_bm->close();
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Set PDF Bookmarks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px;
        }

        /* ✅ Responsive adjustments for Android */
        @media (max-width: 768px) {
            .main-container {
                padding: 10px;
            }

            .stat-card {
                padding: 0.75rem;
            }

            .stat-number {
                font-size: 1.5rem;
            }

            .form-label {
                font-size: 0.9rem;
            }

            .form-select,
            .form-control {
                font-size: 0.9rem;
                padding: 0.4rem 0.6rem;
            }

            .btn {
                font-size: 0.85rem;
                padding: 0.35rem 0.75rem;
            }

            .table th,
            .table td {
                padding: 0.4rem 0.5rem;
                font-size: 0.85rem;
            }

            .bookmark-row {
                padding: 0.75rem;
            }

            h3.card-title {
                font-size: 1.1rem;
            }

            h4 {
                font-size: 1rem;
            }

            .badge {
                font-size: 0.75rem;
                padding: 0.3em 0.5em;
            }
        }

        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 1.5rem;
        }

        .stat-card {
            background: white;
            padding: 1.25rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .bookmark-row {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1rem;
        }

        .badge-semester {
            background-color: #28a745;
            color: white;
            padding: 0.35em 0.65em;
            font-size: 0.85em;
            border-radius: 0.25rem;
        }

        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 0.8rem 0;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 600;
        }

        .btn-logout {
            background: #dc3545;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-weight: 500;
        }

        .btn-logout:hover {
            background: #c82333;
        }

        .btn-bookmark {
            background: #ffc107;
            color: #212529;
            border: none;
            font-size: 0.85rem;
            padding: 0.25rem 0.75rem;
        }

        .btn-bookmark:hover {
            background: #e0a800;
        }

        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #f8f9fa;
            font-weight: 600;
            white-space: nowrap;
        }

        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-bookmark"></i> Admin Bookmark Manager
            </a>
            <div class="ms-auto">
                <a href="logout.php" class="btn btn-logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container main-container">
        <!-- Alert Messages -->
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show">
                <i class="fas fa-<?php echo $message_type === 'success' ? 'check-circle' : 'exclamation-triangle'; ?>"></i>
                <?php echo htmlspecialchars($message); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <!-- Stats Row -->
        <div class="row mb-3">
            <div class="col-6 col-md-4 mb-3">
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($materials); ?></div>
                    <div class="stat-label">Filtered Materials</div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $selected_material ? count($current_bookmarks) : '—'; ?></div>
                    <div class="stat-label">Bookmarks</div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $selected_material ? '#' . $selected_material['id'] : '—'; ?>
                    </div>
                    <div class="stat-label">Selected Material</div>
                </div>
            </div>
        </div>

        <!-- ✅ SEARCH & FILTER CARD -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-search"></i> Search & Filter Materials
                </h3>
            </div>
            <div class="card-body">
                <form method="GET" class="row g-2">
                    <div class="col-6 col-md-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select name="semester" id="semester" class="form-select">
                            <option value="">All</option>
                            <?php foreach ($semesters as $sem): ?>
                                <option value="<?php echo htmlspecialchars($sem); ?>" <?php echo ($filters['semester'] == $sem) ? 'selected' : ''; ?>>
                                    Sem <?php echo htmlspecialchars($sem); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-6 col-md-3">
                        <label for="subject" class="form-label">Subject</label>
                        <select name="subject" id="subject" class="form-select">
                            <option value="">All</option>
                            <?php if (!empty($filters['semester']) && isset($subjects_by_semester[$filters['semester']])): ?>
                                <?php foreach ($subjects_by_semester[$filters['semester']] as $sub): ?>
                                    <option value="<?php echo htmlspecialchars($sub); ?>" <?php echo ($filters['subject'] == $sub) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($sub); ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="col-6 col-md-3">
                        <label for="material_title" class="form-label">Type</label>
                        <select name="material_title" id="material_title" class="form-select">
                            <option value="">All</option>
                            <option value="NOTE" <?php echo ($filters['material_title'] == 'NOTE') ? 'selected' : ''; ?>>
                                📝 Notes</option>
                            <option value="PYQ" <?php echo ($filters['material_title'] == 'PYQ') ? 'selected' : ''; ?>>❓
                                PYQ</option>
                            <option value="SYLLABUS" <?php echo ($filters['material_title'] == 'SYLLABUS') ? 'selected' : ''; ?>>📋 Syllabus</option>
                            <option value="LAB REPORT" <?php echo ($filters['material_title'] == 'LAB REPORT') ? 'selected' : ''; ?>>🔬 Lab</option>
                            <option value="ASSIGNMENT" <?php echo ($filters['material_title'] == 'ASSIGNMENT') ? 'selected' : ''; ?>>📚 Assign</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-3">
                        <label for="search" class="form-label">Search</label>
                        <input type="text" name="search" id="search" class="form-control" placeholder="Keywords..."
                            value="<?php echo htmlspecialchars($filters['search']); ?>">
                    </div>
                    <div class="col-12 text-center mt-2">
                        <button type="submit" class="btn btn-warning btn-sm">
                            <i class="fas fa-filter"></i> Apply
                        </button>
                        <a href="admin_bookmark_creater.php" class="btn btn-outline-secondary btn-sm ms-1">
                            <i class="fas fa-refresh"></i> Clear
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- ✅ BOOKMARK EDITOR (Only shown when material selected) -->
        <?php if ($selected_material): ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-1">
                        <i class="fas fa-edit"></i> Set Bookmarks:
                        “<?= htmlspecialchars($selected_material['material_title']) ?>”
                    </h3>
                    <p class="text-muted mb-0 small">
                        Subject: <strong><?= htmlspecialchars($selected_material['subject']) ?></strong> |
                        Semester: <span class="badge badge-semester">Sem <?= $selected_material['semester'] ?></span> |
                        ID: #<?= $selected_material['id'] ?>
                    </p>
                </div>
                <div class="card-body">
                    <form method="POST" id="bookmarkForm">
                        <input type="hidden" name="material_id" value="<?= $selected_material['id'] ?>">

                        <div id="bookmarks-container">
                            <?php if (!empty($current_bookmarks)): ?>
                                <?php foreach ($current_bookmarks as $i => $bm): ?>
                                    <div class="bookmark-row">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-8 col-md-7">
                                                <input type="text" name="bookmark_title[]" class="form-control"
                                                    placeholder="e.g., Chapter 1" value="<?= htmlspecialchars($bm['title']) ?>"
                                                    required>
                                            </div>
                                            <div class="col-3 col-md-4">
                                                <input type="number" name="bookmark_page[]" class="form-control" placeholder="Pg"
                                                    value="<?= (int) $bm['page_number'] ?>" min="1" required>
                                            </div>
                                            <div class="col-1 col-md-1">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="this.closest('.bookmark-row').remove()">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="bookmark-row">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-8 col-md-7">
                                            <input type="text" name="bookmark_title[]" class="form-control"
                                                placeholder="e.g., Chapter 1" required>
                                        </div>
                                        <div class="col-3 col-md-4">
                                            <input type="number" name="bookmark_page[]" class="form-control" placeholder="Pg"
                                                min="1" required>
                                        </div>
                                        <div class="col-1 col-md-1">
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="this.closest('.bookmark-row').remove()">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-2">
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="addBookmarkRow()">
                                <i class="fas fa-plus"></i> Add Bookmark
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" name="set_bookmarks" class="btn btn-success">
                                <i class="fas fa-save"></i> Save Bookmarks
                            </button>
                            <a href="admin_bookmark_creater.php<?php
                            $query = [];
                            if (!empty($filters['semester']))
                                $query[] = 'semester=' . urlencode($filters['semester']);
                            if (!empty($filters['subject']))
                                $query[] = 'subject=' . urlencode($filters['subject']);
                            if (!empty($filters['material_title']))
                                $query[] = 'material_title=' . urlencode($filters['material_title']);
                            if (!empty($filters['search']))
                                $query[] = 'search=' . urlencode($filters['search']);
                            echo !empty($query) ? '?' . implode('&', $query) : '';
                            ?>" class="btn btn-outline-secondary ms-1">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        <?php endif; ?>

        <!-- ✅ MATERIALS TABLE -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-list"></i> Materials Library
                </h3>
            </div>
            <div class="card-body">
                <?php if (!empty($materials)): ?>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sem</th>
                                    <th>Subject</th>
                                    <th>Type</th>
                                    <th class="d-none d-md-table-cell">Desc</th>
                                    <th>Bmarks</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($materials as $mat): ?>
                                    <tr>
                                        <td><strong>#<?php echo $mat['id']; ?></strong></td>
                                        <td><span
                                                class="badge badge-semester">S<?php echo htmlspecialchars($mat['semester']); ?></span>
                                        </td>
                                        <td><?php echo htmlspecialchars($mat['subject']); ?></td>
                                        <td>
                                            <?php
                                            $icons = [
                                                'NOTE' => '📝',
                                                'PYQ' => '❓',
                                                'SYLLABUS' => '📋',
                                                'LAB REPORT' => '🔬',
                                                'ASSIGNMENT' => '📚'
                                            ];
                                            $icon = isset($icons[$mat['material_title']]) ? $icons[$mat['material_title']] : '📄';
                                            echo '<span title="' . htmlspecialchars($mat['material_title']) . '">' . $icon . '</span>';
                                            ?>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="text-muted"
                                                title="<?php echo htmlspecialchars($mat['description']); ?>">
                                                <?php echo htmlspecialchars(substr($mat['description'], 0, 30)) . (strlen($mat['description']) > 30 ? '...' : ''); ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-<?php echo $mat['bookmark_count'] > 0 ? 'success' : 'secondary'; ?> fs-6">
                                                <?php echo $mat['bookmark_count']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="?material_id=<?php echo $mat['id']; ?><?php
                                               $query = [];
                                               if (!empty($filters['semester']))
                                                   $query[] = 'semester=' . urlencode($filters['semester']);
                                               if (!empty($filters['subject']))
                                                   $query[] = 'subject=' . urlencode($filters['subject']);
                                               if (!empty($filters['material_title']))
                                                   $query[] = 'material_title=' . urlencode($filters['material_title']);
                                               if (!empty($filters['search']))
                                                   $query[] = 'search=' . urlencode($filters['search']);
                                               echo !empty($query) ? '&' . implode('&', $query) : '';
                                               ?>" class="btn btn-bookmark btn-sm">
                                                <i class="fas fa-bookmark"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="text-center py-4">
                        <i class="fas fa-folder-open fa-2x text-muted mb-2"></i>
                        <h5 class="text-muted">No materials found</h5>
                        <p class="text-muted small">Adjust filters or upload new material.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-outline-primary btn-sm">
                <i class="fas fa-arrow-left"></i> Dashboard
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function addBookmarkRow() {
            const container = document.getElementById('bookmarks-container');
            const newRow = document.createElement('div');
            newRow.className = 'bookmark-row';
            newRow.innerHTML = `
                <div class="row g-2 align-items-center">
                    <div class="col-8 col-md-7">
                        <input type="text" name="bookmark_title[]" class="form-control" placeholder="e.g., Chapter 1" required>
                    </div>
                    <div class="col-3 col-md-4">
                        <input type="number" name="bookmark_page[]" class="form-control" placeholder="Pg" min="1" required>
                    </div>
                    <div class="col-1 col-md-1">
                        <button type="button" class="btn btn-danger btn-sm" onclick="this.closest('.bookmark-row').remove()">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `;
            container.appendChild(newRow);
        }

        // Dynamic subject loading
        document.getElementById('semester')?.addEventListener('change', function () {
            const semester = this.value;
            const subjectSelect = document.getElementById('subject');
            subjectSelect.innerHTML = '<option value="">All</option>';

            if (semester && window.subjectsBySemester && window.subjectsBySemester[semester]) {
                window.subjectsBySemester[semester].forEach(subject => {
                    const option = document.createElement('option');
                    option.value = subject;
                    option.textContent = subject;
                    subjectSelect.appendChild(option);
                });
            }
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function () {
            window.subjectsBySemester = <?php echo json_encode($subjects_by_semester); ?>;
        });
    </script>
</body>

</html>