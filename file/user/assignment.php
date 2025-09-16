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
    <link rel="stylesheet" href="styles_page.css">
</head>

<body>
    <!-- Include Header -->
    <?php include '../../components/head-foot/header.php'; ?>

    <div class="container">
        <h1>Available Assignments</h1>

        <!-- Filter Section -->
        <div class="filter-section">
            <form action="assignment.php" method="GET">
                <label for="semester">Filter by Semester:</label>
                <select name="semester" id="semester" onchange="this.form.submit()">
                    <option value="">All Semesters</option>
                    <?php foreach ($predefined_semesters as $semester) { ?>
                        <option value="<?php echo $semester; ?>" <?php echo ($semester == $selected_semester) ? 'selected' : ''; ?>>
                            Semester <?php echo $semester; ?>
                        </option>
                    <?php } ?>
                </select>

                <?php if ($selected_semester) { ?>
                    <label for="subject">Filter by Subject:</label>
                    <select name="subject" id="subject" onchange="this.form.submit()">
                        <option value="">All Subjects</option>
                        <?php foreach ($subjects[$selected_semester] as $subject) { ?>
                            <option value="<?php echo htmlspecialchars($subject); ?>" <?php echo ($subject == $selected_subject) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($subject); ?>
                            </option>
                        <?php } ?>
                    </select>
                <?php } ?>

                <button type="submit">Filter</button>
            </form>
        </div>

        <?php if (!empty($assignments_by_semester)) { ?>
            <?php foreach ($assignments_by_semester as $semester => $assignments_list) { ?>
                <div class="semester-section">
                    <div class="semester-header" onclick="toggleVisibility('assignments-sem<?php echo $semester; ?>', this)">
                        Semester <?php echo $semester; ?>
                    </div>
                    <div id="assignments-sem<?php echo $semester; ?>" class="assignments-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>File Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($assignments_list as $assignment) { ?>
                                    <tr>
                                        <td data-label="Subject"><?php echo htmlspecialchars($assignment['subject']); ?></td>
                                        <td data-label="Description"><?php echo htmlspecialchars($assignment['description']); ?></td>
                                        <td data-label="File Actions">
                                            <?php
                                            // Check if file exists
                                            if (!empty($assignment['material_file'])) {
                                                $file_path = '../admin/' . $assignment['material_file'];
                                                ?>
                                                <!-- Download link -->
                                                <a href="<?php echo $file_path; ?>" target="_blank" download>Download</a>
                                                <!-- View link -->
                                                <a href="view.php?id=<?php echo $assignment['id']; ?>" target="_blank">View</a>
                                            <?php } ?>
                                            
                                            <?php
                                            // Check if external link exists
                                            if (!empty($assignment['external_link'])) {
                                                ?>
                                                <!-- Go to Page link -->
                                                <a href="<?php echo htmlspecialchars($assignment['external_link']); ?>" target="_blank" rel="noopener noreferrer">Go to Page</a>
                                            <?php } ?>
                                            
                                            <?php
                                            // If neither file nor link exists
                                            if (empty($assignment['material_file']) && empty($assignment['external_link'])) {
                                                echo '<span class="no-content">No content available</span>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No assignments found for the selected criteria. Please try a different filter or check back later.</p>
        <?php } ?>
    </div>

    <!-- Include Footer -->
    <?php include '../../components/head-foot/footer.php'; ?>

    <script>
        function toggleVisibility(id, headerElement) {
            const section = document.getElementById(id);
            const isVisible = section.style.display === 'block';
            
            if (isVisible) {
                section.style.display = 'none';
                section.classList.remove('show');
                headerElement.classList.remove('active');
            } else {
                section.style.display = 'block';
                section.classList.add('show');
                headerElement.classList.add('active');
            }
        }

        // Add loading animation to filter form
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.filter-section form');
            const selects = form.querySelectorAll('select');
            
            selects.forEach(select => {
                select.addEventListener('change', function() {
                    const button = form.querySelector('button');
                    button.innerHTML = '<span class="loading"></span> Filtering...';
                    button.disabled = true;
                });
            });

            // Add smooth scroll behavior
            document.querySelectorAll('.semester-header').forEach(header => {
                header.addEventListener('click', function() {
                    setTimeout(() => {
                        this.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }, 100);
                });
            });
        });

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && e.target.classList.contains('semester-header')) {
                e.target.click();
            }
        });

        // Enhanced link security
        document.querySelectorAll('a[target="_blank"]').forEach(link => {
            if (!link.getAttribute('rel')) {
                link.setAttribute('rel', 'noopener noreferrer');
            }
        });
    </script>
</body>

</html>