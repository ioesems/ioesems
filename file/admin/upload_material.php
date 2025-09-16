<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['success' => false, 'message' => 'Not logged in.']);
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
}

include 'config.php';

if ($conn === null || $conn->connect_error) {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
        exit();
    } else {
        $_SESSION['upload_message'] = "Database connection failed.";
        $_SESSION['upload_message_type'] = "error";
        header("Location: index.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_material'])) {
    // Sanitize inputs
    $semester = $conn->real_escape_string($_POST['semester'] ?? '');
    $subject = $conn->real_escape_string($_POST['subject'] ?? '');
    $description = $conn->real_escape_string($_POST['description'] ?? '');
    $material_title = $_POST['material_title'] ?? '';
    $external_link = !empty($_POST['external_link']) ? $conn->real_escape_string($_POST['external_link']) : NULL;
    $custom_title = $_POST['material_title'] === 'CUSTOM' ? $conn->real_escape_string($_POST['custom_title'] ?? '') : '';

    if ($material_title === 'CUSTOM') {
        $material_title = $custom_title;
    }

    // Validate required fields
    if (empty($semester) || empty($subject) || empty($description) || empty($material_title)) {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
            exit();
        } else {
            $_SESSION['upload_message'] = "Please fill in all required fields.";
            $_SESSION['upload_message_type'] = "error";
        }
    } else {
        $file = $_FILES['file'] ?? null;

        // Case 1: File is uploaded
        if ($file && $file['error'] === UPLOAD_ERR_OK) {
            $allowedTypes = ['pdf', 'doc', 'docx', 'ppt', 'pptx', 'txt', 'jpg', 'jpeg', 'png'];
            $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

            if (!in_array($fileExtension, $allowedTypes)) {
                if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    echo json_encode(['success' => false, 'message' => 'File type not allowed. Please upload PDF, DOC, DOCX, PPT, PPTX, TXT, or image files.']);
                    exit();
                } else {
                    $_SESSION['upload_message'] = "File type not allowed...";
                    $_SESSION['upload_message_type'] = "error";
                }
            } elseif ($file['size'] > 50 * 1024 * 1024) {
                if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    echo json_encode(['success' => false, 'message' => 'File size too large. Maximum size is 50MB.']);
                    exit();
                } else {
                    $_SESSION['upload_message'] = "File size too large...";
                    $_SESSION['upload_message_type'] = "error";
                }
            } else {
                $fileName = time() . '_' . preg_replace("/[^a-zA-Z0-9\.\-_]/", "", basename($file['name']));
                $uploadDir = '../user/uploads/';

                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                $filePath = $uploadDir . $fileName;

                if (move_uploaded_file($file['tmp_name'], $filePath)) {
                    $stmt = $conn->prepare("INSERT INTO materials (semester, subject, material_file, material_title, description, external_link, date_of_modification) VALUES (?, ?, ?, ?, ?, ?, NOW())");
                    $stmt->bind_param("isssss", $semester, $subject, $filePath, $material_title, $description, $external_link);

                    if ($stmt->execute()) {
                        $insertId = $stmt->insert_id;
                        $stmt->close();

                        // Store for form persistence
                        $_SESSION['upload_form_data'] = [
                            'persist_semester' => $_POST['semester'] ?? '',
                            'persist_subject' => $_POST['subject'] ?? '',
                            'persist_material_title' => $_POST['material_title'] ?? '',
                            'persist_custom_title' => $_POST['material_title'] === 'CUSTOM' ? ($_POST['custom_title'] ?? '') : '',
                            'persist_description' => $_POST['description'] ?? '',
                            'persist_external_link' => $_POST['external_link'] ?? ''
                        ];

                        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                            echo json_encode(['success' => true, 'message' => "✅ Material uploaded successfully! ID: {$insertId}"]);
                            exit();
                        } else {
                            $_SESSION['upload_message'] = "✅ Material uploaded successfully! ID: {$insertId}";
                            $_SESSION['upload_message_type'] = "success";
                        }
                    } else {
                        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                            echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
                            exit();
                        } else {
                            $_SESSION['upload_message'] = "Database error: " . $stmt->error;
                            $_SESSION['upload_message_type'] = "error";
                        }
                        $stmt->close();
                    }
                } else {
                    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                        echo json_encode(['success' => false, 'message' => 'Failed to move uploaded file.']);
                        exit();
                    } else {
                        $_SESSION['upload_message'] = "Failed to move uploaded file.";
                        $_SESSION['upload_message_type'] = "error";
                    }
                }
            }

        // Case 2: No file, but external link provided
        } elseif ($external_link) {
            $stmt = $conn->prepare("INSERT INTO materials (semester, subject, material_file, material_title, description, external_link, date_of_modification) VALUES (?, ?, NULL, ?, ?, ?, NOW())");
            $stmt->bind_param("issss", $semester, $subject, $material_title, $description, $external_link);

            if ($stmt->execute()) {
                $insertId = $stmt->insert_id;
                $stmt->close();

                // Store for form persistence
                $_SESSION['upload_form_data'] = [
                    'persist_semester' => $_POST['semester'] ?? '',
                    'persist_subject' => $_POST['subject'] ?? '',
                    'persist_material_title' => $_POST['material_title'] ?? '',
                    'persist_custom_title' => $_POST['material_title'] === 'CUSTOM' ? ($_POST['custom_title'] ?? '') : '',
                    'persist_description' => $_POST['description'] ?? '',
                    'persist_external_link' => $_POST['external_link'] ?? ''
                ];

                if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    echo json_encode(['success' => true, 'message' => "✅ External link material added successfully! ID: {$insertId}"]);
                    exit();
                } else {
                    $_SESSION['upload_message'] = "✅ External link material added successfully! ID: {$insertId}";
                    $_SESSION['upload_message_type'] = "success";
                }
            } else {
                if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
                    exit();
                } else {
                    $_SESSION['upload_message'] = "Database error: " . $stmt->error;
                    $_SESSION['upload_message_type'] = "error";
                }
                $stmt->close();
            }

        // Case 3: Neither file nor link
        } else {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                echo json_encode(['success' => false, 'message' => '⚠️ Either upload a file or provide an external link.']);
                exit();
            } else {
                $_SESSION['upload_message'] = "⚠️ Either upload a file or provide an external link.";
                $_SESSION['upload_message_type'] = "error";
            }
        }
    }

    // If not AJAX, redirect
    if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
        header("Location: index.php");
        exit();
    }
}
?>