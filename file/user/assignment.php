<?php
// Enable error reporting to debug issues
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the configuration file to connect to the database
include '../admin/config.php';

// Check if the connection was successful
if ($conn === null || $conn->connect_error) {
    die("Database connection failed: " . ($conn ? $conn->connect_error : 'No connection object'));
}

// Fetch all distinct semesters for the dropdown
$sql_semesters = "SELECT DISTINCT semester FROM materials WHERE material_title = 'ASSIGNMENT' ORDER BY semester ASC";
$result_semesters = $conn->query($sql_semesters);

// Initialize an array for semesters
$semesters = [];
if ($result_semesters->num_rows > 0) {
    while ($row = $result_semesters->fetch_assoc()) {
        $semesters[] = $row['semester'];
    }
}

// Adding predefined semesters 1 to 8 to the filter dropdown
$predefined_semesters = range(1, 8);

include '../admin/subjects.php'; // Include the subjects array from subjects.php

// Fetch assignments based on the selected semester (if any)
$selected_semester = isset($_GET['semester']) ? intval($_GET['semester']) : null;
$selected_subject = isset($_GET['subject']) ? $_GET['subject'] : null;
$sql_assignments = "SELECT * FROM materials WHERE material_title = 'ASSIGNMENT'";
if ($selected_semester) {
    $sql_assignments .= " AND semester = $selected_semester";
}
if ($selected_subject) {
    $sql_assignments .= " AND subject = '" . $conn->real_escape_string($selected_subject) . "'";
}
$sql_assignments .= " ORDER BY semester ASC, subject ASC";
$result_assignments = $conn->query($sql_assignments);

// Initialize an array to group assignments by semester
$assignments_by_semester = [];
if ($result_assignments->num_rows > 0) {
    while ($row = $result_assignments->fetch_assoc()) {
        $assignments_by_semester[$row['semester']][] = $row;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Management</title>
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Shared Stylesheet -->
    <link rel="stylesheet" href="styles_page.css">
</head>

<body>
    <!-- Include Header -->
    <?php include '../../components/head-foot/header.php'; ?>

    <div class="container">
        <h1>📚 Assignments</h1>

        <!-- Filter Section -->
        <div class="filter-section">
            <h2><i class="fas fa-filter"></i> Filter Assignments</h2>
            <form action="assignment.php" method="GET">
                <div>
                    <label for="semester">Filter by Semester:</label>
                    <select name="semester" id="semester" onchange="this.form.submit()">
                        <option value="">All Semesters</option>
                        <?php foreach ($predefined_semesters as $semester) { ?>
                            <option value="<?php echo $semester; ?>" <?php echo ($semester == $selected_semester) ? 'selected' : ''; ?>>
                                Semester <?php echo $semester; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <?php if ($selected_semester) { ?>
                    <div>
                        <label for="subject">Filter by Subject:</label>
                        <select name="subject" id="subject" onchange="this.form.submit()">
                            <option value="">All Subjects</option>
                            <?php foreach ($subjects[$selected_semester] as $subject) { ?>
                                <option value="<?php echo htmlspecialchars($subject); ?>" <?php echo ($subject == $selected_subject) ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($subject); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                <?php } ?>

                <button type="submit">
                    <i class="fas fa-search"></i> Apply Filter
                </button>
            </form>
        </div>

        <?php if (!empty($assignments_by_semester)) { ?>
            <?php foreach ($assignments_by_semester as $semester => $assignments_list) { ?>
                <div class="semester-section">
                    <div class="semester-header" onclick="toggleVisibility('assignments-sem<?php echo $semester; ?>')">
                        <span>Semester <?php echo $semester; ?></span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div id="assignments-sem<?php echo $semester; ?>" class="notes-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($assignments_list as $assignment) { ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($assignment['subject']); ?></td>
                                        <td><?php echo htmlspecialchars($assignment['description']); ?></td>
                                        <td class="file-cell">
                                            <?php 
                                            $hasFile = !empty($assignment['material_file']);
                                            $hasLink = !empty($assignment['external_link']);
                                            ?>

                                            <?php if ($hasFile): ?>
                                                <?php
                                                $file_path = '../admin/' . $assignment['material_file'];
                                                ?>
                                                <!-- Download link -->
                                                <a href="<?php echo htmlspecialchars($file_path); ?>" target="_blank" download>
                                                    <i class="fas fa-download"></i> Download
                                                </a>
                                                <!-- View link (only show if file exists) -->
                                                <a href="view.php?id=<?php echo (int)$assignment['id']; ?>" target="_blank">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                            <?php endif; ?>

                                            <?php if ($hasLink): ?>
                                                <!-- External Link -->
                                                <!-- If no file exists, label it as "View" for better UX -->
                                                <a href="<?php echo htmlspecialchars($assignment['external_link']); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fas fa-external-link-alt"></i> <?php echo $hasFile ? 'External Link' : 'View'; ?>
                                                </a>
                                            <?php endif; ?>

                                            <?php if (!$hasFile && !$hasLink): ?>
                                                <span class="text-muted">No content available</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="no-results">
                <i class="fas fa-clipboard-check"></i>
                <h3>No assignments found for the selected filters.</h3>
                <p>Please try adjusting your search criteria.</p>
            </div>
        <?php } ?>
    </div>

    <!-- Include Footer -->
    <?php include '../../components/head-foot/footer.php'; ?>

    <script>
        function toggleVisibility(id) {
            const section = document.getElementById(id);
            const header = section.previousElementSibling;
            if (section.style.display === 'none' || section.style.display === '') {
                section.style.display = 'block';
                header.classList.add('active');
            } else {
                section.style.display = 'none';
                header.classList.remove('active');
            }
        }

        // Optional: Add smooth scroll or accessibility enhancements
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure all external links have security attributes
            document.querySelectorAll('a[target="_blank"]').forEach(link => {
                if (!link.hasAttribute('rel')) {
                    link.setAttribute('rel', 'noopener noreferrer');
                }
            });

            // Keyboard accessibility for headers
            document.querySelectorAll('.semester-header').forEach(header => {
                header.setAttribute('tabindex', '0');
                header.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            });
        });
    </script>
</body>

</html>