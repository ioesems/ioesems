<?php

session_start();

// Include the configuration file to connect to the database
include 'config.php';

// Check if the connection was successful
if ($conn === null || $conn->connect_error) {
    die("Database connection failed: " . ($conn ? $conn->connect_error : 'No connection object'));
}

// Include subjects array
include 'subjects.php'; 

// Fetch the syllabus data for the provided ID
if (isset($_GET['id'])) {
    $edit_id = $_GET['id'];
    $query = "SELECT * FROM materials WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
} else {
    echo "No syllabus ID provided.";
    exit;
}

// Handle form submission to update syllabus data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $material_title = $_POST['material_title'];
    $description = $_POST['description'];
    $file = $_FILES['file'];
    
    // Prepare the update query
    $update_query = "UPDATE materials SET semester = ?, subject = ?, material_title = ?, description = ? WHERE id = ?";
    
    // If a new file is uploaded
    if ($file['error'] == UPLOAD_ERR_OK) {
        // Generate the new file name and upload it
        $fileName = time() . '_' . basename($file['name']);
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . $fileName;

        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            // Update the query to also change the file
            $update_query = "UPDATE materials SET semester = ?, subject = ?, material_title = ?, description = ?, material_file = ? WHERE id = ?";
            $stmt = $conn->prepare($update_query);
            $stmt->bind_param("ssssis", $semester, $subject, $material_title, $description, $filePath, $edit_id);
        } else {
            echo "Failed to upload the file.";
            exit;
        }
    } else {
        // No file uploaded, just update the other fields
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ssssi", $semester, $subject, $material_title, $description, $edit_id);
    }

    if ($stmt->execute()) {
        // Redirect back to index.php after successful update
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
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
    <title>Edit Syllabus</title>
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

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .sort-button {
            margin: 10px 0;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .sort-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Edit Syllabus</h1>

<form action="edit.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
    <label for="semester">Select Semester:</label>
    <select name="semester" id="semester" required>
        <option value="">Select Semester</option>
        <?php foreach (array_keys($subjects) as $semester) { ?>
            <option value="<?php echo $semester; ?>" <?php echo $row['semester'] == $semester ? 'selected' : ''; ?>>
                Semester <?php echo $semester; ?>
            </option>
        <?php } ?>
    </select>

    <label for="subject">Select Subject:</label>
    <select name="subject" id="subject" required>
        <option value="">Select Subject</option>
        <?php foreach ($subjects[$row['semester']] as $subject) { ?>
            <option value="<?php echo $subject; ?>" <?php echo $row['subject'] == $subject ? 'selected' : ''; ?>>
                <?php echo $subject; ?>
            </option>
        <?php } ?>
    </select>

    <label for="material_title">Material Title:</label>
    <select name="material_title" id="material_title" required>
        <option value="">Select Material</option>
        <option value="NOTE" <?php echo $row['material_title'] == 'NOTE' ? 'selected' : ''; ?>>NOTE</option>
        <option value="PYQ" <?php echo $row['material_title'] == 'PYQ' ? 'selected' : ''; ?>>PYQ</option>
        <option value="SYLLABUS" <?php echo $row['material_title'] == 'SYLLABUS' ? 'selected' : ''; ?>>SYLLABUS</option>
        <option value="LAB REPORT" <?php echo $row['material_title'] == 'LAB REPORT' ? 'selected' : ''; ?>>LAB REPORT</option>
        <option value="ASSIGNMENT" <?php echo $row['material_title'] == 'ASSIGNMENT' ? 'selected' : ''; ?>>ASSIGNMENT</option>
        <option value="CUSTOM" <?php echo $row['material_title'] == 'CUSTOM' ? 'selected' : ''; ?>>Custom (Enter Title)</option>
    </select>

    <label for="description">Description:</label>
    <textarea name="description" id="description" rows="4" required><?php echo $row['description']; ?></textarea>

    <label for="file">Upload New Syllabus File (optional):</label>
    <input type="file" name="file" id="file">
    <p>Current file: <a href="uploads/<?php echo $row['material_file']; ?>" target="_blank"><?php echo basename($row['material_file']); ?></a></p>

    <button type="submit">Update</button>
</form>

</body>
</html>
