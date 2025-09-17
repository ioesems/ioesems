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
// Function to detect if user is on Android device
function isAndroidDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    return stripos($userAgent, 'Android') !== false;
}
// Function to detect mobile devices
function isMobileDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    return preg_match('/(android|iphone|ipad|mobile|phone)/i', $userAgent);
}
$isAndroid = isAndroidDevice();
$isMobile = isMobileDevice();
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
            transition: all 0.3s ease;
        }
        /* Fullscreen mode - completely minimal */
        .fullscreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw !important;
            height: 100vh !important;
            margin: 0 !important;
            padding: 0 !important;
            border-radius: 0 !important;
            z-index: 9999;
            background: #2c2c2c;
        }
        .fullscreen .container {
            width: 100% !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            border-radius: 0 !important;
            background: #2c2c2c;
            box-shadow: none;
        }
        /* Hide ALL elements in fullscreen except PDF content and exit button */
        .fullscreen h1,
        .fullscreen h2,
        .fullscreen .device-info,
        .fullscreen .toolbar,
        .fullscreen .page-navigation,
        .fullscreen .back-button,
        .fullscreen .progress-container,
        .fullscreen .loading,
        .fullscreen .error,
        .fullscreen #pdf-controls .page-navigation,
        .fullscreen #pdf-controls .progress-container,
        .fullscreen .swipe-indicator,
        .fullscreen .thumbnail-nav,
        .fullscreen .shortcuts-info,
        .fullscreen .rotate-indicator {
            display: none !important;
        }
        /* Hide ALL text content in fullscreen - only show PDF viewer */
        .fullscreen .container > h1,
        .fullscreen .container > .device-info,
        .fullscreen .pdf-container > h2,
        .fullscreen .container > .toolbar,
        .fullscreen .container > .back-button {
            display: none !important;
        }
        /* Make PDF container take full screen in fullscreen mode */
        .fullscreen .pdf-container {
            margin: 0 !important;
            padding: 0 !important;
        }
        /* Floating exit fullscreen button */
        .exit-fullscreen-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(244, 67, 54, 0.9);
            color: white;
            border: none;
            padding: 12px 16px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 14px;
            display: none;
            z-index: 10000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        .exit-fullscreen-btn:hover {
            background: rgba(244, 67, 54, 1);
            transform: scale(1.05);
        }
        .fullscreen .exit-fullscreen-btn {
            display: flex !important;
            align-items: center;
            gap: 8px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        .pdf-container {
            text-align: center;
            margin-top: 20px;
            position: relative;
        }
        .fullscreen .pdf-container {
            margin-top: 0;
            height: 100vh;
        }
        .pdf-container iframe {
            width: 100%;
            height: 600px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .fullscreen .pdf-container iframe {
            height: 100vh;
            border-radius: 0;
            box-shadow: none;
        }
        /* Enhanced PDF viewer styles */
        .custom-pdf-viewer {
            width: 100%;
            height: 600px;
            border: 1px solid #ddd;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            background: #f5f5f5;
            touch-action: pan-y; /* Restrict to vertical panning */
        }
        .fullscreen .custom-pdf-viewer {
            height: 100vh;
            border: none;
            border-radius: 0;
            background: #333;
        }
        .pdf-canvas-container {
            width: 100%;
            height: 100%;
            overflow-x: hidden;   /* Disable horizontal scroll */
            overflow-y: auto;     /* Enable vertical scroll */
            position: relative;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            touch-action: pan-y;
            display: flex;
            flex-direction: column; /* Stack children vertically */
            align-items: center;     /* Center pages horizontally */
        }
        .pdf-page {
            display: block;
            margin: 20px auto; /* Add vertical margin between pages */
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: default; /* Remove grab cursor since no horizontal drag */
            transition: transform 0.2s ease;
            max-width: 100%;
            box-sizing: border-box;
        }
        /* Remove hover scale on mobile for better performance */
        @media (max-width: 768px) {
            .pdf-page:hover {
                transform: none;
            }
            
        }
        .fullscreen .pdf-page {
            border: 1px solid #555;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            margin: 15px auto;
        }
        /* Enhanced toolbar */
        .toolbar {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            flex-wrap: wrap;
            gap: 10px;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .toolbar button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .toolbar button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .toolbar button:active {
            transform: translateY(0);
        }
        .toolbar button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
            transform: none;
        }
        .toolbar button.secondary {
            background-color: #2196F3;
        }
        .toolbar button.secondary:hover {
            background-color: #1976D2;
        }
        .toolbar button.danger {
            background-color: #f44336;
        }
        .toolbar button.danger:hover {
            background-color: #d32f2f;
        }
        /* Enhanced page navigation */
        .page-navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin: 15px 0;
            background: rgba(255, 255, 255, 0.95);
            padding: 12px 20px;
            border-radius: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            display: none !important;
        }
        .page-info {
            background-color: #f0f0f0;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            min-width: 120px;
            /* display: none !important; */

        }

        .page-navigation button {
            background: #4CAF50;
            border: none;
            color: white;
            padding: 10px 15px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .page-navigation button:hover {
            background: #45a049;
            transform: scale(1.1);
        }
        /* Progress bar */
        .progress-container {
            width: 100%;
            height: 4px;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 2px;
            margin: 10px 0;
        }
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #4CAF50, #45a049);
            border-radius: 2px;
            transition: width 0.3s ease;
        }
        /* Loading and error states */
        .loading {
            text-align: center;
            padding: 50px;
            font-size: 18px;
            color: #666;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #4CAF50;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .loading-percentage {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
        }
        .error {
            text-align: center;
            padding: 50px;
            font-size: 16px;
            color: #d32f2f;
            background-color: #ffebee;
            border-radius: 4px;
            margin: 20px 0;
        }
        /* Touch indicators - always visible in fullscreen */
        .swipe-indicator {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(76, 175, 80, 0.8);
            color: white;
            padding: 20px;
            border-radius: 50%;
            font-size: 24px;
            opacity: 0;
            transition: all 0.3s ease;
            pointer-events: none;
            z-index: 1000;
        }
        .swipe-indicator.left {
            left: 20px;
        }
        .swipe-indicator.right {
            right: 20px;
        }
        .swipe-indicator.show {
            opacity: 1;
            transform: translateY(-50%) scale(1.1);
        }
        /* Fullscreen swipe indicators are more prominent */
        .fullscreen .swipe-indicator {
            background: rgba(76, 175, 80, 0.9);
            padding: 25px;
            font-size: 28px;
        }
        /* Thumbnail navigation */
        .thumbnail-nav {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-height: 400px;
            overflow-y: auto;
            display: none;
            z-index: 1001;
        }
        .thumbnail {
            width: 60px;
            height: 80px;
            margin: 5px 0;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .thumbnail:hover {
            border-color: #4CAF50;
            transform: scale(1.05);
        }
        .thumbnail.active {
            border-color: #4CAF50;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.5);
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .back-button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .device-info {
            background-color: #e3f2fd;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
            border-left: 4px solid #2196F3;
        }
        /* Search overlay */
        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 2000;
        }
        .search-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 90%;
        }
        .search-input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .search-input:focus {
            border-color: #4CAF50;
            outline: none;
        }
        /* Mobile optimizations */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 15px;
            }
            .pdf-container iframe,
            .custom-pdf-viewer {
                height: 500px;
            }
            .toolbar {
                gap: 8px;
                padding: 8px;
            }
            .toolbar button {
                padding: 10px 12px;
                font-size: 12px;
            }
            .page-navigation {
                gap: 10px;
                padding: 10px 15px;
            }
            .thumbnail-nav {
                right: 10px;
                max-height: 300px;
            }
            .thumbnail {
                width: 50px;
                height: 65px;
            }
            .exit-fullscreen-btn {
                top: 15px;
                right: 15px;
                padding: 10px 14px;
                font-size: 12px;
            }

     /* Hide ALL elements in fullscreen except PDF content and exit button */
        .fullscreen h1,
        .fullscreen h2,
        .fullscreen .device-info,
        .fullscreen .toolbar,
        .fullscreen .page-navigation,
        .fullscreen .back-button,
        .fullscreen .progress-container,
        .fullscreen .loading,
        .fullscreen .error,
        .fullscreen #pdf-controls .page-navigation,
        .fullscreen #pdf-controls .progress-container,
        .fullscreen .swipe-indicator,
        .fullscreen .thumbnail-nav,
        .fullscreen .shortcuts-info,
        .fullscreen .rotate-indicator {
            display: none !important;
        }
        /* Hide ALL text content in fullscreen - only show PDF viewer */
        .fullscreen .container > h1,
        .fullscreen .container > .device-info,
        .fullscreen .pdf-container > h2,
        .fullscreen .container > .toolbar,
        .fullscreen .container > .back-button {
            display: none !important;
        }

        }
        /* Keyboard shortcuts indicator */
        .shortcuts-info {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 15px;
            border-radius: 8px;
            font-size: 12px;
            display: none;
            z-index: 1002;
        }
        .shortcuts-info.show {
            display: block;
        }
        /* Rotation indicator */
        .rotate-indicator {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
            font-size: 18px;
            display: none;
            z-index: 1003;
        }
        /* Selection disabled for better touch experience */
        .pdf-canvas-container {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        /* Fullscreen specific hidden page controls for Android */
        .fullscreen #pdf-controls .page-navigation,
        .fullscreen #pdf-controls .progress-container {
            display: none !important;
        }
        /* Keep PDF content visible in fullscreen */
        .fullscreen .pdf-canvas-container {
            height: 100vh !important;
        }

        /* --- START: Fullscreen-mode: hide everything except PDF and Exit button --- */
        body.fullscreen-mode * {
            display: none !important;
        }

        /* Keep the pdf container + its contents visible */
        body.fullscreen-mode .pdf-container,
        body.fullscreen-mode .pdf-container * {
            display: block !important;
        }

        /* Make the PDF viewer fill the screen exactly */
        body.fullscreen-mode .custom-pdf-viewer,
        body.fullscreen-mode .pdf-container iframe,
        body.fullscreen-mode .pdf-canvas-container {
            width: 100vw !important;
            height: 100vh !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            overflow: hidden !important;
        }

        /* Show the floating exit fullscreen button on top */
        body.fullscreen-mode .exit-fullscreen-btn {
            display: flex !important;
            align-items: center;
            gap: 8px;
            position: fixed;
            top: 16px;
            right: 16px;
            z-index: 10001;
            background: rgba(244, 67, 54, 0.95) !important;
            box-shadow: 0 8px 20px rgba(0,0,0,0.35) !important;
        }

        /* Ensure pdf pages are centered and use full-height scrolling */
        body.fullscreen-mode .pdf-canvas-container {
            display: block !important;
            -webkit-overflow-scrolling: touch;
            overflow-y: auto;
            touch-action: pan-y;
        }

        /* Hide any overlays that might have been shown accidentally */
        body.fullscreen-mode .search-overlay,
        body.fullscreen-mode .thumbnail-nav,
        body.fullscreen-mode .shortcuts-info,
        body.fullscreen-mode .rotate-indicator,
        body.fullscreen-mode .loading,
        body.fullscreen-mode .error {
            display: none !important;
        }
        /* --- END: Fullscreen-mode rules --- */
    </style>
    <!-- PDF.js library for Android users -->
    <?php if ($isAndroid): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script>
        // Set up PDF.js worker
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- Floating exit fullscreen button -->
    <button class="exit-fullscreen-btn" id="exit-fullscreen-btn" onclick="exitFullscreen()">
        <i class="fas fa-times"></i> Exit Fullscreen
    </button>
    <div class="container" id="main-container">

        <div class="pdf-container" id="pdf-container">
            <h2>
                <?php echo htmlspecialchars($material['subject']); ?> 
                - Semester <?php echo htmlspecialchars($material['semester']); ?>
            </h2>
            <?php if ($isAndroid): ?>

                <!-- Custom PDF viewer for Android -->
                <div id="loading" class="loading">
                    <div class="loading-spinner"></div>
                    <div>Loading PDF...</div>
                    <div class="loading-percentage" id="loading-percentage">0%</div>
                </div>


                <div id="error" class="error" style="display: none;">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p>Error loading PDF.</p>
                    <div style="margin-top: 15px;">
                        <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>" target="_blank" style="display: inline-block; margin: 5px; padding: 10px 15px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px;">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                        <button onclick="tryGoogleViewer()" style="margin: 5px; padding: 10px 15px; background-color: #2196F3; color: white; border: none; border-radius: 4px; cursor: pointer;">
                            <i class="fas fa-external-link-alt"></i> Open in Google Viewer
                        </button>
                        <button onclick="tryEmbedViewer()" style="margin: 5px; padding: 10px 15px; background-color: #FF9800; color: white; border: none; border-radius: 4px; cursor: pointer;">
                            <i class="fas fa-eye"></i> Try Embed Viewer
                        </button>
                    </div>
                </div>

                
                <div id="pdf-controls" style="display: none;">
                    <div class="page-navigation">
                        <button id="prev-page" onclick="previousPage()"><i class="fas fa-chevron-left"></i></button>
                        <span class="page-info">
                            Page <span id="page-num">1</span> of <span id="page-count">-</span>
                        </span>
                        <button id="next-page" onclick="nextPage()"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    

                    <div class="progress-container">
                        <div class="progress-bar" id="progress-bar"></div>
                    </div>
                    <div class="custom-pdf-viewer" id="pdf-viewer-container">
                        <div id="pdf-canvas" class="pdf-canvas-container"></div>
                        <!-- Swipe indicators --> 
                    </div>
                </div>



                <!-- Thumbnail navigation -->
                <div class="thumbnail-nav" id="thumbnail-nav">
                    <!-- Thumbnails will be generated here -->
                </div>
                <!-- Fallback embed viewer -->
                <div id="embed-viewer" style="display: none;">
                    <iframe src="../user/<?php echo htmlspecialchars($material['material_file']); ?>" 
                            style="width: 100%; height: 600px; border: none; border-radius: 8px;"
                            onload="this.style.display='block'"
                            onerror="this.style.display='none'">
                    </iframe>
                </div>
            <?php else: ?>
                <!-- Standard iframe viewer for desktop -->
                <iframe id="pdf-viewer" src="../user/<?php echo htmlspecialchars($material['material_file']); ?>" type="application/pdf">
                    Your browser does not support PDFs. <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>">Download the file</a>.
                </iframe>
            <?php endif; ?>
        </div>
        <!-- Enhanced toolbar for PDF controls -->
        <div class="toolbar">
            <button onclick="toggleFullscreen()" id="fullscreen-btn">
                <i class="fas fa-expand" id="fullscreen-icon"></i> <span id="fullscreen-text">Fullscreen</span>
            </button>
            <?php if ($isAndroid): ?>
                <button id="zoom-out" onclick="zoomOut()"><i class="fas fa-search-minus"></i> Zoom Out</button>
                <button id="zoom-in" onclick="zoomIn()"><i class="fas fa-search-plus"></i> Zoom In</button>
                <button onclick="fitToWidth()"><i class="fas fa-expand-arrows-alt"></i> Fit Width</button>
                <button onclick="rotatePage()" class="secondary"><i class="fas fa-redo"></i> Rotate</button>
                <button onclick="toggleThumbnails()" class="secondary"><i class="fas fa-th"></i> Thumbnails</button>
            <?php else: ?>
                <button onclick="zoomInIframe()"><i class="fas fa-search-plus"></i> Zoom In</button>
                <button onclick="zoomOutIframe()"><i class="fas fa-search-minus"></i> Zoom Out</button>
            <?php endif; ?>
            <button onclick="downloadPDF()"><i class="fas fa-download"></i> Download</button>
            <button onclick="printPDF()"><i class="fas fa-print"></i> Print</button>
            <button onclick="sharePDF()" class="secondary"><i class="fas fa-share"></i> Share</button>
            <button onclick="showShortcuts()" class="secondary"><i class="fas fa-keyboard"></i> Shortcuts</button>
        </div>
        <a href="<?php echo htmlspecialchars($referrer); ?>" class="back-button">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
    <!-- Search overlay -->
    <div class="search-overlay" id="search-overlay">
        <div class="search-box">
            <h3>Search in PDF</h3>
            <input type="text" class="search-input" id="search-input" placeholder="Enter search term...">
            <div style="text-align: right;">
                <button onclick="closeSearch()" style="margin-right: 10px; padding: 8px 16px; background: #ccc; border: none; border-radius: 4px; cursor: pointer;">Cancel</button>
                <button onclick="performSearch()" style="padding: 8px 16px; background: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Search</button>
            </div>
        </div>
    </div>
    <!-- Keyboard shortcuts info -->
    <div class="shortcuts-info" id="shortcuts-info">
        <div><strong>Keyboard Shortcuts:</strong></div>
        <div>← → : Previous/Next page</div>
        <div>+ - : Zoom in/out</div>
        <div>F : Fullscreen</div>
        <div>R : Rotate</div>
        <div>T : Thumbnails</div>
        <div>Esc : Exit fullscreen</div>
        <div>Space : Next page</div>
    </div>
    <!-- Rotation indicator -->
    <div class="rotate-indicator" id="rotate-indicator">
        <i class="fas fa-redo fa-spin"></i> Rotating...
    </div>
    <script>
        // Global variables for PDF.js
        let pdfDoc = null;
        let pageNum = 1;
        let pageRendering = false;
        let pageNumPending = null;
        let scale = 1.0;
        let currentCanvas = null;
        let rotation = 0;
        let isFullscreen = false; // unified fullscreen state
        let thumbnailsVisible = false;
        let touchStartX = 0;
        let touchStartY = 0;
        let isSwipeEnabled = true;
        let pagesRendered = 0;
        let totalPages = 0;

        // Initialize PDF viewer when page loads
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            <?php if ($isAndroid): ?>
            initializePDFViewer();
            <?php else: ?>
            // Desktop: nothing to initialize for pdf.js
            <?php endif; ?>
        });

        <?php if ($isAndroid): ?>
        function initializePDFViewer() {
            const pdfUrl = '../user/<?php echo htmlspecialchars($material['material_file']); ?>';
            // Create loading task
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            loadingTask.onProgress = function(progressData) {
                if (progressData && progressData.total) {
                    const percentLoaded = Math.round((progressData.loaded / progressData.total) * 100);
                    const el = document.getElementById('loading-percentage');
                    if (el) el.textContent = percentLoaded + '%';
                }
            };
            loadingTask.promise.then(function(pdf) {
                pdfDoc = pdf;
                totalPages = pdf.numPages;
                const pc = document.getElementById('page-count');
                if (pc) pc.textContent = pdf.numPages;
                const loadEl = document.getElementById('loading');
                if (loadEl) loadEl.style.display = 'none';
                const controls = document.getElementById('pdf-controls');
                if (controls) controls.style.display = 'block';
                // Start rendering all pages sequentially for vertical scroll
                renderAllPages();
                updateNavigationButtons();
                generateThumbnails();
            }).catch(function(error) {
                console.error('Error loading PDF:', error);
                const loadEl = document.getElementById('loading');
                if (loadEl) loadEl.style.display = 'none';
                const err = document.getElementById('error');
                if (err) err.style.display = 'block';
            });
        }

        function renderAllPages() {
            if (!pdfDoc) return;
            pagesRendered = 0;
            const canvasContainer = document.getElementById('pdf-canvas');
            canvasContainer.innerHTML = ''; // Clear any existing content
            // Render pages one by one
            for (let i = 1; i <= totalPages; i++) {
                renderPage(i, true); // true = isPartOfBatch
            }
        }

        function renderPage(num, isPartOfBatch = false) {
            if (!pdfDoc) return;
            pdfDoc.getPage(num).then(function(page) {
                // Create new canvas for this page
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                // Calculate scale based on container width
                const container = document.getElementById('pdf-canvas');
                const containerWidth = Math.max(container.clientWidth - 40, 100); // Account for padding/margin
                const viewport = page.getViewport({ scale: 1.0, rotation: rotation });
                const calculatedScale = containerWidth / viewport.width;
                const finalScale = scale * calculatedScale;
                const scaledViewport = page.getViewport({ scale: finalScale, rotation: rotation });
                canvas.height = scaledViewport.height;
                canvas.width = scaledViewport.width;
                canvas.className = 'pdf-page';
                canvas.dataset.pagenumber = num;
                const renderContext = {
                    canvasContext: ctx,
                    viewport: scaledViewport
                };
                const renderTask = page.render(renderContext);
                renderTask.promise.then(function() {
                    // Append canvas to container
                    const canvasContainer = document.getElementById('pdf-canvas');
                    canvasContainer.appendChild(canvas);
                    if (!isPartOfBatch) {
                        // If rendering single page (e.g., after zoom), scroll to it
                        canvas.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    pagesRendered++;
                    // Update progress bar based on pages rendered
                    if (totalPages > 0) {
                        const progress = (pagesRendered / totalPages) * 100;
                        const progressBar = document.getElementById('progress-bar');
                        if (progressBar) {
                            progressBar.style.width = progress + '%';
                        }
                    }
                }).catch(function(error) {
                    console.error('Error rendering page ' + num + ':', error);
                });
            }).catch(function(error) {
                console.error('Error getting page ' + num + ':', error);
            });
            if (!isPartOfBatch) {
                const pn = document.getElementById('page-num');
                if (pn) pn.textContent = num;
                pageNum = num;
                updateNavigationButtons();
            }
        }

        function generateThumbnails() {
            if (!pdfDoc) return;
            const thumbnailContainer = document.getElementById('thumbnail-nav');
            thumbnailContainer.innerHTML = '';
            for (let i = 1; i <= pdfDoc.numPages; i++) {
                pdfDoc.getPage(i).then(function(page) {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    const viewport = page.getViewport({ scale: 0.2 });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    canvas.className = 'thumbnail';
                    canvas.dataset.page = i;
                    if (i === pageNum) {
                        canvas.classList.add('active');
                    }
                    canvas.addEventListener('click', function() {
                        pageNum = parseInt(this.dataset.page);
                        const targetPage = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
                        if (targetPage) {
                            targetPage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                        updateNavigationButtons();
                        updateThumbnailSelection();
                    });
                    page.render({
                        canvasContext: ctx,
                        viewport: viewport
                    });
                    thumbnailContainer.appendChild(canvas);
                });
            }
        }

        function updateThumbnailSelection() {
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumb => {
                if (parseInt(thumb.dataset.page) === pageNum) {
                    thumb.classList.add('active');
                } else {
                    thumb.classList.remove('active');
                }
            });
        }
        <?php endif; ?>

        function setupEventListeners() {
            // Touch events for swipe navigation (Android viewer canvas)
            const pdfContainer = document.getElementById('pdf-canvas');
            if (pdfContainer) {
                pdfContainer.addEventListener('touchstart', function(e) {
                    if (!isSwipeEnabled) return;
                    touchStartX = e.touches[0].clientX;
                    touchStartY = e.touches[0].clientY;
                }, { passive: true });
                pdfContainer.addEventListener('touchend', function(e) {
                    if (!isSwipeEnabled) return;
                    const touchEndX = e.changedTouches[0].clientX;
                    const touchEndY = e.changedTouches[0].clientY;
                    const deltaX = touchEndX - touchStartX;
                    const deltaY = touchEndY - touchStartY;
                    // Only register swipe if horizontal movement is greater than vertical
                    if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 50) {
                        if (deltaX > 0) {
                            // Swipe right - previous page
                            showSwipeIndicator('left');
                            previousPage();
                        } else {
                            // Swipe left - next page
                            showSwipeIndicator('right');
                            nextPage();
                        }
                    }
                }, { passive: true });
            }

            // Keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                if (e.target.tagName === 'INPUT') return; // Don't interfere with input fields
                switch(e.key) {
                    case 'ArrowLeft':
                        e.preventDefault();
                        previousPage();
                        break;
                    case 'ArrowRight':
                        e.preventDefault();
                        nextPage();
                        break;
                    case 'Escape':
                        e.preventDefault();
                        if (isFullscreen) {
                            exitFullscreen();
                        }
                        break;
                    case 'f':
                    case 'F':
                        e.preventDefault();
                        toggleFullscreen();
                        break;
                    case ' ':
                        e.preventDefault();
                        nextPage();
                        break;
                    case '+':
                    case '=':
                        e.preventDefault();
                        if (typeof zoomIn === 'function') zoomIn();
                        break;
                    case '-':
                        e.preventDefault();
                        if (typeof zoomOut === 'function') zoomOut();
                        break;
                    case 'r':
                    case 'R':
                        e.preventDefault();
                        if (typeof rotatePage === 'function') rotatePage();
                        break;
                    case 't':
                    case 'T':
                        e.preventDefault();
                        if (typeof toggleThumbnails === 'function') toggleThumbnails();
                        break;
                }
            });
            // Fullscreen change detection
            document.addEventListener('fullscreenchange', updateFullscreenButton);
            document.addEventListener('webkitfullscreenchange', updateFullscreenButton);
            document.addEventListener('mozfullscreenchange', updateFullscreenButton);
            document.addEventListener('MSFullscreenChange', updateFullscreenButton);
        }

        function previousPage() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            // Scroll to the previous page element
            const prevPageElement = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
            if (prevPageElement) {
                prevPageElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            updateNavigationButtons();
            const pn = document.getElementById('page-num'); if (pn) pn.textContent = pageNum;
        }
        function nextPage() {
            if (pageNum >= totalPages) {
                return;
            }
            pageNum++;
            // Scroll to the next page element
            const nextPageElement = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
            if (nextPageElement) {
                nextPageElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            updateNavigationButtons();
            const pn = document.getElementById('page-num'); if (pn) pn.textContent = pageNum;
        }
        function updateNavigationButtons() {
            const prevBtn = document.getElementById('prev-page');
            const nextBtn = document.getElementById('next-page');
            if (prevBtn) prevBtn.disabled = (pageNum <= 1);
            if (nextBtn) nextBtn.disabled = (pageNum >= totalPages);
        }
        function updateProgress() {
            if (totalPages > 0) {
                const progress = (pageNum / totalPages) * 100;
                const progressBar = document.getElementById('progress-bar');
                if (progressBar) {
                    progressBar.style.width = progress + '%';
                }
            }
        }
        function zoomIn() {
            scale += 0.25;
            if (typeof renderAllPages === 'function') renderAllPages(); // Re-render all pages with new scale
        }
        function zoomOut() {
            if (scale > 0.5) {
                scale -= 0.25;
                if (typeof renderAllPages === 'function') renderAllPages(); // Re-render all pages with new scale
            }
        }
        function fitToWidth() {
            scale = 1.0;
            if (typeof renderAllPages === 'function') renderAllPages(); // Re-render all pages with new scale
        }
        function rotatePage() {
            showRotationIndicator();
            rotation = (rotation + 90) % 360;
            if (typeof renderAllPages === 'function') renderAllPages(); // Re-render all pages with new rotation
            setTimeout(hideRotationIndicator, 1000);
        }

        function toggleThumbnails() {
            const thumbnailNav = document.getElementById('thumbnail-nav');
            thumbnailsVisible = !thumbnailsVisible;
            if (thumbnailNav) thumbnailNav.style.display = thumbnailsVisible ? 'block' : 'none';
        }
        function showSwipeIndicator(direction) {
            // left/right indicators are optional; keep simple: create if missing
            let indicator = document.getElementById('swipe-' + direction);
            if (!indicator) {
                indicator = document.createElement('div');
                indicator.id = 'swipe-' + direction;
                indicator.className = 'swipe-indicator ' + direction;
                indicator.textContent = direction === 'left' ? '\u25C0' : '\u25B6';
                document.body.appendChild(indicator);
            }
            indicator.classList.add('show');
            setTimeout(() => { indicator.classList.remove('show'); }, 300);
        }
        function showRotationIndicator() {
            const el = document.getElementById('rotate-indicator');
            if (el) el.style.display = 'block';
        }
        function hideRotationIndicator() {
            const el = document.getElementById('rotate-indicator');
            if (el) el.style.display = 'none';
        }
        function showSearch() {
            const ov = document.getElementById('search-overlay');
            if (ov) { ov.style.display = 'flex'; document.getElementById('search-input').focus(); }
        }
        function closeSearch() {
            const ov = document.getElementById('search-overlay');
            if (ov) { ov.style.display = 'none'; }
            const si = document.getElementById('search-input'); if (si) si.value = '';
        }
        function performSearch() {
            const searchTerm = document.getElementById('search-input').value.trim();
            if (searchTerm) {
                // Basic search implementation - in a full implementation,
                // you would search through the PDF text content
                alert('Search functionality would search for: ' + searchTerm);
                closeSearch();
            }
        }
        function showShortcuts() {
            const shortcutsInfo = document.getElementById('shortcuts-info');
            shortcutsInfo.classList.add('show');
            setTimeout(() => {
                hideShortcuts();
            }, 5000);
        }
        function hideShortcuts() {
            const s = document.getElementById('shortcuts-info'); if (s) s.classList.remove('show');
        }
        function sharePDF() {
            if (navigator.share) {
                navigator.share({
                    title: '<?php echo htmlspecialchars($material['material_title']); ?>',
                    text: 'Check out this PDF document',
                    url: window.location.href
                }).catch(console.error);
            } else {
                // Fallback - copy URL to clipboard
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert('PDF link copied to clipboard!');
                }).catch(() => {
                    alert('Share URL: ' + window.location.href);
                });
            }
        }
        // Handle window resize
        window.addEventListener('resize', function() {
            if (pdfDoc && typeof renderAllPages === 'function') {
                setTimeout(function() {
                    renderAllPages();
                }, 100);
            }
        });
        // Fallback functions for Android
        function tryGoogleViewer() {
            const pdfUrl = encodeURIComponent(window.location.origin + '/../user/<?php echo htmlspecialchars($material['material_file']); ?>');
            const googleViewerUrl = `https://docs.google.com/viewer?url=${pdfUrl}&embedded=true`;
            window.open(googleViewerUrl, '_blank');
        }
        function tryEmbedViewer() {
            const err = document.getElementById('error'); if (err) err.style.display = 'none';
            const emb = document.getElementById('embed-viewer'); if (emb) emb.style.display = 'block';
        }

        // Unified Fullscreen functions (works for Android and Desktop)
        function toggleFullscreen() {
            const container = document.getElementById('main-container');
            const exitBtn = document.getElementById('exit-fullscreen-btn');

            if (!isFullscreen) {
                // Try standard Fullscreen API first
                const requestFS = container.requestFullscreen || container.webkitRequestFullscreen || container.mozRequestFullScreen || container.msRequestFullscreen;
                if (requestFS) {
                    try {
                        requestFS.call(container);
                        // the fullscreenchange event will set body.fullscreen-mode
                    } catch (err) {
                        // fallback to class-based fullscreen
                        document.body.classList.add('fullscreen-mode');
                    }
                } else {
                    // Browser doesn't support Fullscreen API -> class fallback
                    document.body.classList.add('fullscreen-mode');
                }

                // show exit button immediately (in case change event is slow)
                if (exitBtn) exitBtn.style.display = 'flex';
                isFullscreen = true;
                if (typeof renderAllPages === 'function') setTimeout(() => renderAllPages(), 120);
            } else {
                exitFullscreen();
            }
        }

        function exitFullscreen() {
            const exitBtn = document.getElementById('exit-fullscreen-btn');

            const exitFS = document.exitFullscreen || document.webkitExitFullscreen || document.mozCancelFullScreen || document.msExitFullscreen;
            if (exitFS && (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement)) {
                try {
                    exitFS.call(document);
                } catch (err) {
                    // ignore and fallback to removing class
                }
            }
            // Ensure class removed (covers API fallback)
            document.body.classList.remove('fullscreen-mode');

            // hide exit button (will be re-shown when entering again)
            if (exitBtn) exitBtn.style.display = 'none';

            isFullscreen = false;
            if (typeof renderAllPages === 'function') setTimeout(() => renderAllPages(), 120);
        }

        // Keep UI state synced when fullscreen actually changes (important for API flow)
        function updateFullscreenButton() {
            const active = !!(document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement);
            if (active) {
                document.body.classList.add('fullscreen-mode');
                const exitBtn = document.getElementById('exit-fullscreen-btn');
                if (exitBtn) exitBtn.style.display = 'flex';
                isFullscreen = true;
            } else {
                document.body.classList.remove('fullscreen-mode');
                const exitBtn = document.getElementById('exit-fullscreen-btn');
                if (exitBtn) exitBtn.style.display = 'none';
                isFullscreen = false;
            }
        }
        document.addEventListener('fullscreenchange', updateFullscreenButton);
        document.addEventListener('webkitfullscreenchange', function(){ document.dispatchEvent(new Event('fullscreenchange')); });
        document.addEventListener('mozfullscreenchange', function(){ document.dispatchEvent(new Event('fullscreenchange')); });
        document.addEventListener('MSFullscreenChange', function(){ document.dispatchEvent(new Event('fullscreenchange')); });

        // Desktop iframe functions
        <?php if (!$isAndroid): ?>
        function zoomInIframe() {
            const iframe = document.getElementById('pdf-viewer');
            if (!iframe) return;
            let currentWidth = iframe.offsetWidth;
            iframe.style.width = (currentWidth + 100) + 'px';
        }
        function zoomOutIframe() {
            const iframe = document.getElementById('pdf-viewer');
            if (!iframe) return;
            let currentWidth = iframe.offsetWidth;
            if (currentWidth > 100) {
                iframe.style.width = (currentWidth - 100) + 'px';
            }
        }
        <?php endif; ?>

        function downloadPDF() {
            const pdfUrl = "../user/<?php echo htmlspecialchars($material['material_file']); ?>";
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = "<?php echo htmlspecialchars($material['material_title']); ?>.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        function printPDF() {
            const pdfUrl = "../user/<?php echo htmlspecialchars($material['material_file']); ?>";
            <?php if ($isAndroid): ?>
            // For Android, open in new tab for printing
            window.open(pdfUrl, '_blank');
            <?php else: ?>
            const iframe = document.createElement('iframe');
            iframe.src = pdfUrl;
            iframe.style.display = 'none';
            document.body.appendChild(iframe);
            iframe.onload = function() {
                try {
                    iframe.contentWindow.print();
                } catch (e) {
                    // Fallback: open in new tab
                    window.open(pdfUrl, '_blank');
                }
                setTimeout(() => {
                    document.body.removeChild(iframe);
                }, 1000);
            };
            <?php endif; ?>
        }
    </script>
</body>
</html>
