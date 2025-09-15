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

// Fetch the material ID from the query string
$material_id = isset($_GET['id']) ? intval($_GET['id']) : null;

if ($material_id) {
    // Fetch the material details based on the ID
    $sql_material = "SELECT * FROM materials WHERE id = $material_id";
    $result_material = $conn->query($sql_material);

    if ($result_material->num_rows > 0) {
        $material = $result_material->fetch_assoc();
    } else {
        die("Material not found.");
    }
} else {
    die("Invalid material ID.");
}

// Determine the referring page
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Material</title>
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        .pdf-container {
            text-align: center;
            margin-top: 20px;
        }

        .pdf-container iframe {
            width: 100%;
            height: 600px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .toolbar {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .toolbar button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .toolbar button:hover {
            background-color: #45a049;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>View <?php echo htmlspecialchars($material['material_title']); ?></h1>

        <div class="pdf-container">
            <h2>
                <?php echo htmlspecialchars($material['subject']); ?> 
                - Semester <?php echo htmlspecialchars($material['semester']); ?>
            </h2>

            <!-- Embed the PDF directly into the page -->
            <iframe id="pdf-viewer" src="../admin/<?php echo htmlspecialchars($material['material_file']); ?>" type="application/pdf">
                Your browser does not support PDFs. <a href="../admin/<?php echo htmlspecialchars($material['material_file']); ?>">Download the file</a>.
            </iframe>
        </div>

        <!-- Toolbar for PDF controls -->
        <div class="toolbar">
            <button onclick="zoomIn()"><i class="fas fa-search-plus"></i> Zoom In</button>
            <button onclick="zoomOut()"><i class="fas fa-search-minus"></i> Zoom Out</button>
            <button onclick="downloadPDF()"><i class="fas fa-download"></i> Download</button>
            <button onclick="printPDF()"><i class="fas fa-print"></i> Print</button>
        </div>

        <!-- Use PHP to create a reliable back button -->
        <a href="<?php echo htmlspecialchars($referrer); ?>" class="back-button">Back</a>
    </div>

    <script>
        function zoomIn() {
            const iframe = document.getElementById('pdf-viewer');
            let currentWidth = iframe.offsetWidth;
            iframe.style.width = (currentWidth + 100) + 'px';
        }

        function zoomOut() {
            const iframe = document.getElementById('pdf-viewer');
            let currentWidth = iframe.offsetWidth;
            if (currentWidth > 100) {
                iframe.style.width = (currentWidth - 100) + 'px';
            }
        }

        function downloadPDF() {
            const pdfUrl = "../admin/<?php echo htmlspecialchars($material['material_file']); ?>";
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = "<?php echo htmlspecialchars($material['material_title']); ?>.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function printPDF() {
            const pdfUrl = "../admin/<?php echo htmlspecialchars($material['material_file']); ?>";
            const iframe = document.createElement('iframe');
            iframe.src = pdfUrl;
            iframe.style.display = 'none';
            document.body.appendChild(iframe);
            iframe.onload = function() {
                iframe.contentWindow.print();
            };
        }
    </script>
</body>

</html>