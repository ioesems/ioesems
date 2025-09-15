<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Redirect to the login page if not logged in
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

// Handle file deletion
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
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
        echo "Material deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Handle form submission for file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $file = $_FILES['file'];
    $material_title = $_POST['material_title'];
    if ($material_title === 'CUSTOM') {
        $material_title = $_POST['custom_title']; // Get the custom title input
    }

    // Handle new file upload
    if ($file['error'] == UPLOAD_ERR_OK) {
        $fileName = time() . '_' . basename($file['name']);
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . $fileName;

        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            $stmt = $conn->prepare("INSERT INTO materials (semester, subject, material_file, material_title, description) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $semester, $subject, $filePath, $material_title, $description);
            if ($stmt->execute()) {
                echo "Material uploaded successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "Error in file upload.";
    }
}

// Determine the sort order (either 'ASC' or 'DESC')
$order = isset($_GET['order']) && $_GET['order'] == 'asc' ? 'ASC' : 'DESC';

// Default query to fetch all uploaded materials
$query = "SELECT * FROM materials ORDER BY date_of_modification $order";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Material</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../../images/logo.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 90%;
      max-width: 800px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1, h2, h3 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }
    label {
      margin: 10px 0 5px;
      font-size: 16px;
      font-weight: bold;
    }
    select, textarea, input[type="file"], input[type="text"], button {
      margin-bottom: 15px;
      padding: 10px;
      font-size: 16px;
      width: 100%;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #45a049;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    @media (max-width: 768px) {
      .container {
        padding: 15px;
      }
      table, th, td {
        font-size: 14px;
      }
      select, textarea, input[type="file"], input[type="text"], button {
        font-size: 14px;
        padding: 8px;
      }
    }
    @media (max-width: 480px) {
      h1, h2, h3 {
        font-size: 20px;
      }
      button {
        padding: 8px;
        font-size: 14px;
      }
      table, th, td {
        font-size: 12px;
      }
    }
  </style>
</head>
<body>

<div class="d-grid justify-content-end">
  <a href="logout.php" class="btn btn-danger w-100">Logout</a>
</div>

<div class="container">
  <h1>Upload Material</h1>

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

    <label for="material_title">Material Title:</label>
    <select name="material_title" id="material_title" required>
      <option value="">Select Material</option>
      <option value="NOTE">NOTE</option>
      <option value="PYQ">PYQ</option>
      <option value="SYLLABUS">SYLLABUS</option>
      <option value="LAB REPORT">LAB REPORT</option>
      <option value="ASSIGNMENT">ASSIGNMENT</option>
      <option value="CUSTOM">Custom (Enter Title)</option>
    </select>
    <input type="text" id="custom_title" name="custom_title" placeholder="Enter custom title" style="display:none;">

    <label for="description">Description:</label>
    <textarea name="description" id="description" rows="4" placeholder="Enter description for the material" required></textarea>

    <label for="file">Upload Material File:</label>
    <input type="file" name="file" id="file" required>

    <button type="submit">Upload</button>
  </form>

  <h2>Uploaded Materials</h2>

  <!-- Write here: Search Section -->
  <h3>Search Materials</h3>
  <form action="index.php" method="GET">
    <label for="semester_search">Select Semester:</label>
    <select name="semester" id="semester_search">
      <option value="">All</option>
      <?php foreach (array_keys($subjects) as $sem) { ?>
        <option value="<?php echo $sem; ?>" <?php if (isset($_GET['semester']) && $_GET['semester'] == $sem) echo 'selected'; ?>>
          Semester <?php echo $sem; ?>
        </option>
      <?php } ?>
    </select>

    <label for="subject_search">Select Subject:</label>
    <select name="subject" id="subject_search">
      <option value="">All</option>
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

    <label for="material_title_search">Material Type:</label>
    <select name="material_title" id="material_title_search">
      <option value="">All</option>
      <option value="NOTE" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'NOTE') echo 'selected'; ?>>NOTE</option>
      <option value="PYQ" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'PYQ') echo 'selected'; ?>>PYQ</option>
      <option value="SYLLABUS" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'SYLLABUS') echo 'selected'; ?>>SYLLABUS</option>
      <option value="LAB REPORT" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'LAB REPORT') echo 'selected'; ?>>LAB REPORT</option>
      <option value="ASSIGNMENT" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'ASSIGNMENT') echo 'selected'; ?>>ASSIGNMENT</option>
      <option value="CUSTOM" <?php if (isset($_GET['material_title']) && $_GET['material_title'] == 'CUSTOM') echo 'selected'; ?>>Custom</option>
    </select>

    <button type="submit">Search</button>
  </form>

  <?php
  // Adjust the query if search filters are applied.
  $searchConditions = [];
  if (isset($_GET['semester']) && $_GET['semester'] != '') {
      $searchConditions[] = "semester = '" . $conn->real_escape_string($_GET['semester']) . "'";
  }
  if (isset($_GET['subject']) && $_GET['subject'] != '') {
      $searchConditions[] = "subject = '" . $conn->real_escape_string($_GET['subject']) . "'";
  }
  if (isset($_GET['material_title']) && $_GET['material_title'] != '') {
      $searchConditions[] = "material_title = '" . $conn->real_escape_string($_GET['material_title']) . "'";
  }
  if (count($searchConditions) > 0) {
      $searchQuery = "SELECT * FROM materials WHERE " . implode(" AND ", $searchConditions) . " ORDER BY date_of_modification $order";
      $result = $conn->query($searchQuery);
  }
  ?>

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
          <td><a href="<?php echo $row['material_file']; ?>" target="_blank">Download</a></td>
          <td><?php echo $row['date_of_modification']; ?></td>
          <td>
            <a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<script>
  // Show/hide custom title input on selection
  document.getElementById('material_title').addEventListener('change', function () {
    const customTitleInput = document.getElementById('custom_title');
    customTitleInput.style.display = this.value === 'CUSTOM' ? 'block' : 'none';
  });

  // Populate subjects in the upload form based on selected semester
  document.getElementById('semester').addEventListener('change', function () {
    const semester = this.value;
    const subjectSelect = document.getElementById('subject');
    subjectSelect.innerHTML = '<option value="">Select Subject</option>';
    if (semester) {
      const subjects = <?php echo json_encode($subjects); ?>;
      subjects[semester].forEach(subject => {
        const option = document.createElement('option');
        option.value = subject;
        option.textContent = subject;
        subjectSelect.appendChild(option);
      });
    }
  });

  // For the search form: update subjects based on the selected semester
  document.getElementById('semester_search').addEventListener('change', function () {
    const semester = this.value;
    const subjectSelect = document.getElementById('subject_search');
    subjectSelect.innerHTML = '<option value="">All</option>';
    if (semester) {
      const subjects = <?php echo json_encode($subjects); ?>;
      subjects[semester].forEach(subject => {
        const option = document.createElement('option');
        option.value = subject;
        option.textContent = subject;
        subjectSelect.appendChild(option);
      });
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php $conn->close(); ?>
</body>
</html>
