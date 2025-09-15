<?php

session_start();


include 'config.php'; // Database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $semester = $conn->real_escape_string($_POST['semester']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $material_title = $conn->real_escape_string($_POST['material_title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Check if a file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Define the upload directory
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Create the directory if it doesn't exist
        }

        // Replace spaces in the file name with underscores
        $file_name = str_replace(' ', '_', basename($_FILES['file']['name']));
        $file_path = $upload_dir . $file_name;

        // Validate file type (optional, customize as needed)
        $allowed_types = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
        $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

        if (!in_array($file_type, $allowed_types)) {
            echo "Error: Only JPG, JPEG, PNG, PDF, DOC, and DOCX files are allowed.";
            exit;
        }

        // Validate file size (5MB max)
        if ($_FILES['file']['size'] > 5000000) { // 5MB
            echo "Error: File size exceeds 5MB.";
            exit;
        }

        // Move the uploaded file
        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
            // Insert record into the database
            $sql = "INSERT INTO materials (semester, subject, material_title, description, material_file) 
                    VALUES ('$semester', '$subject', '$material_title', '$description', '$file_name')";
            if ($conn->query($sql) === TRUE) {
                echo "New material uploaded successfully!";
            } else {
                echo "Database error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: There was an error uploading your file.";
        }
    } else {
        // Provide specific error messages
        switch ($_FILES['file']['error']) {
            case UPLOAD_ERR_NO_FILE:
                echo "Error: No file was uploaded.";
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "Error: File size exceeds the limit.";
                break;
            default:
                echo "Error: An unknown error occurred during file upload.";
                break;
        }
    }
}

// Close the database connection
$conn->close();
?>
