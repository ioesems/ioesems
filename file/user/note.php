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
$sql_semesters = "SELECT DISTINCT semester FROM materials WHERE material_title = 'NOTE' ORDER BY semester ASC";
$result_semesters = $conn->query($sql_semesters);

// Initialize an array for semesters
$semesters = [];
if ($result_semesters->num_rows > 0) {
    while ($row = $result_semesters->fetch_assoc()) {
        $semesters[] = $row['semester'];
    }
}

// Adding predefined semesters 1 to 8 to the filter dropdown (you can modify this as needed)
$predefined_semesters = range(1, 8);

include '../admin/subjects.php'; // Include the subjects array from subjects.php

// Fetch notes based on the selected semester (if any)
$selected_semester = isset($_GET['semester']) ? intval($_GET['semester']) : null;
$selected_subject = isset($_GET['subject']) ? $_GET['subject'] : null;
$sql_notes = "SELECT * FROM materials WHERE material_title = 'NOTE'";
if ($selected_semester) {
    $sql_notes .= " AND semester = $selected_semester";
}
if ($selected_subject) {
    $sql_notes .= " AND subject = '" . $conn->real_escape_string($selected_subject) . "'";
}
$sql_notes .= " ORDER BY semester ASC, subject ASC";
$result_notes = $conn->query($sql_notes);

// Initialize an array to group notes by semester
$notes_by_semester = [];
if ($result_notes->num_rows > 0) {
    while ($row = $result_notes->fetch_assoc()) {
        $notes_by_semester[$row['semester']][] = $row;
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
    <title>Notes Management</title>
    <link rel="icon" type="image/png" href="../../images/logo.png">


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            width: 90%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .filter-section {
            margin-bottom: 20px;
            text-align: center;
        }

        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .semester-section {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: #f4f4f4;
        }

        .semester-header {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
        }

        .notes-list {
            display: none;
            /* Initially hidden */
            padding: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #eaeaea;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Media Queries for Responsive Design */
        @media only screen and (max-width: 768px) {
            .container {
                width: 100%;
                padding: 10px;
            }

            h1 {
                font-size: 24px;
            }

            select {
                font-size: 14px;
                padding: 8px;
            }

            button {
                font-size: 14px;
                padding: 8px 12px;
            }

            .semester-header {
                font-size: 16px;
                padding: 8px 12px;
            }

            .semester-section {
                padding: 10px;
            }

            table th,
            table td {
                padding: 10px;
            }

            /* Adjust subject and description text size for mobile devices */
            table td {
                font-size: 14px;
                /* Smaller text for subject and description */
            }

            table td a {
                font-size: 14px;
                /* Adjust the file download link font size */
            }
        }

        /* Media Queries for Small Mobile Devices */
        @media only screen and (max-width: 480px) {
            .container {
                padding: 5px;
            }

            h1 {
                font-size: 20px;
            }

            select {
                font-size: 12px;
                padding: 6px;
            }

            button {
                font-size: 12px;
                padding: 6px 10px;
            }

            .semester-header {
                font-size: 14px;
                padding: 6px 10px;
            }

            .semester-section {
                padding: 8px;
            }

            table th,
            table td {
                padding: 8px;
            }

            table td a {
                font-size: 12px;
                /* Adjust the file download link font size */
                padding: 5px 8px;
            }

            /* Further reduce the text size of subject and description for small screens */
            table td {
                font-size: 12px;
                /* Even smaller text for subject and description */
            }
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Available Notes</h1>

        <!-- Filter Section -->
        <div class="filter-section">
            <form action="note.php" method="GET">
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

        <?php if (!empty($notes_by_semester)) { ?>
            <?php foreach ($notes_by_semester as $semester => $notes_list) { ?>
                <div class="semester-section">
                    <div class="semester-header" onclick="toggleVisibility('notes-sem<?php echo $semester; ?>')">
                        Semester <?php echo $semester; ?>
                    </div>
                    <div id="notes-sem<?php echo $semester; ?>" class="notes-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($notes_list as $note) { ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($note['subject']); ?></td>
                                        <td><?php echo htmlspecialchars($note['description']); ?></td>
                                        <td>
                                            <?php
                                            // Assuming the file is stored in the "admin/uploads" directory
                                            $file_path = '../admin/' . $note['material_file'];
                                            ?>
                                            <!-- Download link -->
                                            <a href="<?php echo $file_path; ?>" target="_blank" download>Download</a><br>
                                            <!-- View link (assuming 'view.php' handles file viewing) -->
                                            <a href="view.php?id=<?php echo $note['id']; ?>" target="_blank">View</a>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No notes found for the selected semester.</p>
        <?php } ?>
    </div>

    <script>
        function toggleVisibility(id) {
            const section = document.getElementById(id);
            if (section.style.display === 'none' || section.style.display === '') {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        }
    </script>
</body>

</html>