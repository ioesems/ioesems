<?php
// Include the configuration file to connect to the database
include 'config.php';

// Check if the connection was successful
if ($conn === null || $conn->connect_error) {
    die("Database connection failed: " . ($conn ? $conn->connect_error : 'No connection object'));
}

// Define subjects for each semester (Same as in syllabus.php)
$subjects = [
    1 => [
        "Engineering Mathematics I",
        "Computer Programming",
        "Engineering Drawing I",
        "Engineering Physics",
        "Applied Mechanics",
        "Basic Electrical Engineering"
    ],
    2 => [
        "Engineering Mathematics II",
        "Engineering Drawing II",
        "Basic Electronics Engineering",
        "Engineering Chemistry",
        "Fundamentals of Thermodynamics & Heat Transfer",
        "Workshop Technology"
    ],
    3 => [
        "Engineering Mathematics III",
        "Object Oriented Programming",
        "Electrical Circuit Theory",
        "Theory of Computation",
        "Electronics Devices and Circuit",
        "Digital Logic",
        "Electromagnetism"
    ],
    4 => [
        "Electrical Machine",
        "Numerical Method",
        "Applied Mathematics",
        "Instrumentation I",
        "Data Structure and Algorithm",
        "Microprocessor",
        "Discrete Structure"
    ],
    5 => [
        "Communication English",
        "Probability and Statistics",
        "Computer Organization and Architecture",
        "Software Engineering",
        "Computer Graphics",
        "Instrumentation II",
        "Data Communication"
    ],
    6 => [
        "Engineering Economics",
        "Object Oriented Analysis and Design",
        "Artificial Intelligence",
        "Operating System",
        "Embedded System",
        "Database Management System",
        "Minor Project"
    ],
    7 => [
        "ICT Project Management",
        "Organization and Management",
        "Energy Environment and Society",
        "Distributed System",
        "Computer Networks and Security",
        "Digital Signal Analysis and Processing",
        "Elective I",
        "Project I"
    ],
    8 => [
        "Engineering Professional Practice",
        "Information System",
        "Internet and Intranet",
        "Simulation and Modeling",
        "Elective II",
        "Elective III",
        "Project II"
    ]
];

// Handle the form submission for file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $file = $_FILES['file'];

    // Check if a file is uploaded
    if ($file['error'] == UPLOAD_ERR_OK) {
        // Generate a unique name for the file
        $fileName = time() . '_' . basename($file['name']);
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . $fileName;

        // Move the uploaded file to the server
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            // Insert syllabus information into the database
            $stmt = $conn->prepare("INSERT INTO materials (semester, subject, material_file, material_title, description) VALUES (?, ?, ?, 'SYLLABUS', ?)");
            $stmt->bind_param("isss", $semester, $subject, $filePath, $description);
            if ($stmt->execute()) {
                echo "Syllabus uploaded successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "Error in file upload.";
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
    <title>Upload Syllabus</title>
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
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        select, textarea, input[type="file"] {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            width: 50%;
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
    </style>
      <style>
    body {
      padding-top: 90px;
      background-color: #AAF0D1;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1030;
    }

    .card {
      height: auto;
      font-size: 18px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body a {
      display: block;
    }

    .card:hover {
      background-color: #28a745; /* Green background on hover */
      color: white;
      transform: scale(1.05); /* Slightly scale up the card */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
    }

    .card-body:hover {
      cursor: pointer;
    }
  </style>
</head>
<body>

    <div class="container">
        <h1>Upload Syllabus</h1>

        <!-- Upload Form -->
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label for="semester">Select Semester:</label>
            <select name="semester" id="semester" required>
                <option value="">Select Semester</option>
                <?php foreach (array_keys($subjects) as $semester) { ?>
                    <option value="<?php echo $semester; ?>">Semester <?php echo $semester; ?></option>
                <?php } ?>
            </select>

            <label for="subject">Select Subject:</label>
            <select name="subject" id="subject" required>
                <option value="">Select Subject</option>
            </select>

            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4" placeholder="Enter description for the syllabus" required></textarea>

            <label for="file">Upload Syllabus File:</label>
            <input type="file" name="file" id="file" required>

            <button type="submit">Upload</button>
        </form>
    </div>


    <h2>Uploaded Materials</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Semester</th>
                    <th>Subject</th>
                    <th>Material Title</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>Upload Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['material_title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><a href="uploads/<?php echo $row['material_file']; ?>" target="_blank">Download</a></td>
                        <td><?php echo $row['date_of_modification']; ?></td>
                        <td>
                            <a href="admin_page.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this material?')">Delete</a> |
                            <a href="admin_page.php?edit_id=<?php echo $row['id']; ?>">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        // Dynamic Subject Dropdown based on Selected Semester
        document.getElementById('semester').addEventListener('change', function () {
            var semester = this.value;
            var subjectSelect = document.getElementById('subject');
            subjectSelect.innerHTML = '<option value="">Select Subject</option>'; // Reset subject dropdown

            if (semester) {
                var subjects = <?php echo json_encode($subjects); ?>;
                subjects[semester].forEach(function (subject) {
                    var option = document.createElement('option');
                    option.value = subject;
                    option.textContent = subject;
                    subjectSelect.appendChild(option);
                });
            }
        });
    </script>

</body>
</html>
