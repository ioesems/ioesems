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

// Determine the referring page (used for back button)
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
            touch-action: manipulation;
        }

        .container {
            width: 90%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            transition: all .3s ease;
        }

        .top-toolbar {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 6px;
            flex-wrap: wrap;
        }

        .top-toolbar button {
            background: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s;
        }

        .top-toolbar button:hover {
            background: #0056b3;
        }

        .top-toolbar button.download-btn {
            background: #28a745;
        }

        .top-toolbar button.download-btn:hover {
            background: #1e7e34;
        }

        .pdf-container {
            text-align: center;
            margin-top: 20px;
            position: relative;
        }

        .pdf-canvas-container {
            width: 100%;
            min-height: 50vh;
            overflow-x: hidden;
            overflow-y: auto;
            position: relative;
            -webkit-overflow-scrolling: touch;
            touch-action: pan-y pinch-zoom;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 0;
            transform-origin: center;
        }

        .pdf-page {
            display: block;
            margin: 20px auto;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            box-sizing: border-box;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
            transform-origin: center;
        }

        .exit-fullscreen-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(244, 67, 54, 0.9);
            color: white;
            border: none;
            padding: 12px 16px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            display: none;
            z-index: 10001;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: all 0.2s;
        }

        .exit-fullscreen-btn:hover {
            background: rgba(244, 67, 54, 1);
            transform: scale(1.05);
        }

        body.fullscreen-mode {
            background: #000;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        body.fullscreen-mode .top-toolbar,
        body.fullscreen-mode h1,
        body.fullscreen-mode h2,
        body.fullscreen-mode .device-info,
        body.fullscreen-mode .page-navigation,
        body.fullscreen-mode .back-button,
        body.fullscreen-mode .progress-container,
        body.fullscreen-mode .loading,
        body.fullscreen-mode .error,
        body.fullscreen-mode .thumbnail-nav,
        body.fullscreen-mode .shortcuts-info,
        body.fullscreen-mode .rotate-indicator,
        body.fullscreen-mode .search-overlay {
            display: none !important;
        }

        body.fullscreen-mode .container {
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
            border-radius: 0;
            box-shadow: none;
            background: #000;
        }

        body.fullscreen-mode .pdf-container,
        body.fullscreen-mode .pdf-canvas-container {
            width: 100%;
            height: 100vh;
            padding: 0;
            margin: 0;
            overflow: auto;
            background: #000;
            -webkit-overflow-scrolling: touch;
            touch-action: pan-y pinch-zoom;
        }

        body.fullscreen-mode .exit-fullscreen-btn {
            display: flex !important;
            align-items: center;
            justify-content: center;
            z-index: 10002;
        }

        .swipe-indicator {
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 20px;
            font-weight: bold;
            z-index: 10003;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .progress-container {
            width: 100%;
            height: 4px;
            background: #eee;
            border-radius: 2px;
            margin: 10px 0;
        }

        .progress-bar {
            height: 100%;
            background: #2196F3;
            border-radius: 2px;
            width: 0%;
            transition: width 0.2s ease;
        }

        .page-navigation {
            margin: 15px 0;
        }

        .page-navigation button {
            background: #f5f5f5;
            border: 1px solid #ddd;
            padding: 8px 16px;
            margin: 0 5px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .page-navigation button:hover:not(:disabled) {
            background: #e9ecef;
        }

        .page-navigation button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .page-info {
            font-weight: bold;
            margin: 0 10px;
        }

        .zoom-controls {
            margin: 10px 0;
        }

        .zoom-controls button {
            background: #6c757d;
            color: white;
            border: none;
            padding: 8px 16px;
            margin: 0 5px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .zoom-controls button:hover {
            background: #545b62;
        }

        .loading {
            text-align: center;
            padding: 20px;
            font-size: 16px;
        }

        .loading-percentage {
            font-weight: bold;
            color: #007bff;
            margin-top: 10px;
        }

        .error {
            text-align: center;
            padding: 20px;
            background: #f8d7da;
            color: #721c24;
            border-radius: 4px;
            margin: 10px 0;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .back-button:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .top-toolbar {
                flex-direction: column;
                align-items: center;
            }

            .top-toolbar button {
                width: 200px;
                margin: 2px 0;
            }
        }
    </style>

    <?php if ($isAndroid): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
        <script>pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';</script>
    <?php endif; ?>
</head>

<body>
    <button class="exit-fullscreen-btn" id="exit-fullscreen-btn" onclick="exitFullscreen()">
        <i class="fas fa-times"></i> Exit Fullscreen
    </button>

    <div class="container" id="main-container">
        <div class="pdf-container" id="pdf-container">
            <h2><?php echo htmlspecialchars($material['subject']); ?> - Semester <?php echo htmlspecialchars($material['semester']); ?></h2>

            <!-- Top Toolbar - Visible in normal mode, hidden in fullscreen -->
            <div class="top-toolbar" id="top-toolbar">
                <button onclick="toggleFullscreen()" id="fullscreen-btn">
                    <i class="fas fa-expand"></i> Fullscreen
                </button>
                <button onclick="downloadPDF()" class="download-btn">
                    <i class="fas fa-download"></i> Download
                </button>
            </div>

            <?php if ($isAndroid): ?>
                <div id="loading" class="loading">
                    <div>Loading PDF...</div>
                    <div class="loading-percentage" id="loading-percentage">0%</div>
                </div>

                <div id="error" class="error" style="display:none;">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p>Error loading PDF.</p>
                    <div style="margin-top:15px;">
                        <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>" target="_blank"
                            style="display:inline-block;margin:5px;padding:10px 15px;background-color:#4CAF50;color:white;text-decoration:none;border-radius:4px;">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                        <button onclick="tryGoogleViewer()"
                            style="margin:5px;padding:10px 15px;background-color:#2196F3;color:white;border:none;border-radius:4px;cursor:pointer;">
                            <i class="fas fa-external-link-alt"></i> Open in Google Viewer
                        </button>
                    </div>
                </div>

                <div id="pdf-controls" style="display:none;">
                    <div class="page-navigation">
                        <button id="prev-page" onclick="previousPage()"><i class="fas fa-chevron-left"></i> Previous</button>
                        <span class="page-info">Page <span id="page-num">1</span> of <span id="page-count">-</span></span>
                        <button id="next-page" onclick="nextPage()">Next <i class="fas fa-chevron-right"></i></button>
                    </div>
                    
                    <div class="zoom-controls">
                        <button id="zoom-out" onclick="zoomOut()"><i class="fas fa-search-minus"></i> Zoom Out</button>
                        <button id="zoom-in" onclick="zoomIn()"><i class="fas fa-search-plus"></i> Zoom In</button>
                    </div>

                    <div class="progress-container">
                        <div class="progress-bar" id="progress-bar"></div>
                    </div>
                    <div class="custom-pdf-viewer" id="pdf-viewer-container">
                        <div id="pdf-canvas" class="pdf-canvas-container"></div>
                    </div>
                </div>
            <?php else: ?>
                <iframe id="pdf-viewer" src="../user/<?php echo htmlspecialchars($material['material_file']); ?>"
                    type="application/pdf" style="width:100%;height:80vh;border:none;border-radius:8px;">
                    Your browser does not support PDFs. <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>">Download the file</a>.
                </iframe>
            <?php endif; ?>
        </div>

        <a href="<?php echo htmlspecialchars($referrer); ?>" class="back-button">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <script>
        // ======================
        // GLOBAL VARIABLES
        // ======================
        let pdfDoc = null;
        let pageNum = 1;
        let scale = 1.0;
        let isFullscreen = false;
        let totalPages = 0;
        let pagesRendered = 0;

        // Gesture state
        let isSwiping = false;
        let isPinching = false;
        let lastSwipeTime = 0;
        let touchStartX = 0;
        let touchStartY = 0;
        let initialPinchDistance = 0;
        let pinchStartScale = 1.0;

        // Constants
        const SWIPE_COOLDOWN_MS = 450;
        const MIN_SWIPE_VELOCITY = 0.6;
        const MIN_SWIPE_DISTANCE = 70;

        // ======================
        // INIT
        // ======================
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            <?php if ($isAndroid): ?>
            initializePDFViewer();
            <?php endif; ?>
        });

        // ======================
        // PDF VIEWER (ANDROID)
        // ======================
        <?php if ($isAndroid): ?>
        function initializePDFViewer() {
            const pdfUrl = '../user/<?php echo htmlspecialchars($material['material_file']); ?>';
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

                document.getElementById('page-count').textContent = pdf.numPages;
                document.getElementById('loading').style.display = 'none';
                document.getElementById('pdf-controls').style.display = 'block';

                renderAllPages();
                updateNavigationButtons();
            }).catch(function(error) {
                console.error('Error loading PDF:', error);
                document.getElementById('loading').style.display = 'none';
                document.getElementById('error').style.display = 'block';
            });
        }

        function renderAllPages() {
            if (!pdfDoc) return;
            pagesRendered = 0;
            const canvasContainer = document.getElementById('pdf-canvas');
            canvasContainer.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                renderPage(i, true);
            }

            setTimeout(() => {
                const currentPage = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
                if (currentPage) {
                    currentPage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }, 100);
        }

        function renderPage(num, isPartOfBatch = false) {
            if (!pdfDoc) return;

            pdfDoc.getPage(num).then(function(page) {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                const container = document.getElementById('pdf-canvas');
                const containerWidth = Math.max(container.clientWidth - 40, 320);

                // Get original viewport
                const viewport = page.getViewport({ scale: 1.0 });

                // Calculate responsive scale
                const responsiveScale = containerWidth / viewport.width;

                // Apply device pixel ratio for HD
                const pixelRatio = window.devicePixelRatio || 1;
                const finalScale = scale * responsiveScale * pixelRatio;

                // Get scaled viewport
                const scaledViewport = page.getViewport({ scale: finalScale });

                // Set canvas dimensions
                canvas.style.width = `${scaledViewport.width / pixelRatio}px`;
                canvas.style.height = `${scaledViewport.height / pixelRatio}px`;
                canvas.width = scaledViewport.width;
                canvas.height = scaledViewport.height;

                canvas.className = 'pdf-page';
                canvas.dataset.pagenumber = num;

                // Render the page
                const renderContext = {
                    canvasContext: ctx,
                    viewport: scaledViewport
                };

                return page.render(renderContext).promise.then(function() {
                    const canvasContainer = document.getElementById('pdf-canvas');
                    canvasContainer.appendChild(canvas);

                    pagesRendered++;
                    updateProgress();

                    if (!isPartOfBatch) {
                        canvas.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        document.getElementById('page-num').textContent = num;
                        pageNum = num;
                        updateNavigationButtons();
                    }
                });
            }).catch(console.error);
        }

        function updateProgress() {
            if (totalPages > 0) {
                const progress = (pagesRendered / totalPages) * 100;
                const progressBar = document.getElementById('progress-bar');
                if (progressBar) progressBar.style.width = progress + '%';
            }
        }
        <?php endif; ?>

        // ======================
        // SIMPLE ZOOM - NO DISAPPEARING PDF
        // ======================
        function zoomIn() {
            if (scale >= 3.0) return;
            
            const container = document.getElementById('pdf-canvas');
            
            // ✅ SIMPLE APPROACH: Just use CSS transform - PDF stays visible
            scale += 0.25;
            container.style.transform = `scale(${scale})`;
            container.style.transformOrigin = 'center top';
        }

        function zoomOut() {
            if (scale <= 0.5) return;
            
            const container = document.getElementById('pdf-canvas');
            
            // ✅ SIMPLE APPROACH: Just use CSS transform - PDF stays visible
            scale -= 0.25;
            container.style.transform = `scale(${scale})`;
            container.style.transformOrigin = 'center top';
        }

        // ======================
        // GESTURE HANDLING
        // ======================
        function setupEventListeners() {
            const pdfContainer = document.getElementById('pdf-canvas');
            if (!pdfContainer) return;

            pdfContainer.addEventListener('touchstart', handleTouchStart, { passive: false });
            pdfContainer.addEventListener('touchmove', handleTouchMove, { passive: false });
            pdfContainer.addEventListener('touchend', handleTouchEnd, { passive: true });

            document.addEventListener('keydown', function(e) {
                if (e.target.tagName === 'INPUT') return;
                switch(e.key) {
                    case 'ArrowLeft': previousPage(); break;
                    case 'ArrowRight': nextPage(); break;
                    case 'Escape': if (isFullscreen) exitFullscreen(); break;
                    case 'f': case 'F': toggleFullscreen(); break;
                    case ' ': e.preventDefault(); nextPage(); break;
                    case '+': case '=': zoomIn(); break;
                    case '-': zoomOut(); break;
                }
            });

            // Listen for fullscreen changes
            document.addEventListener('fullscreenchange', handleFullscreenChange);
            document.addEventListener('webkitfullscreenchange', handleFullscreenChange);
            document.addEventListener('mozfullscreenchange', handleFullscreenChange);
            document.addEventListener('MSFullscreenChange', handleFullscreenChange);
        }

        function handleFullscreenChange() {
            const isInFullscreen = !!(document.fullscreenElement || document.webkitFullscreenElement || 
                                     document.mozFullScreenElement || document.msFullscreenElement);
            
            if (!isInFullscreen && isFullscreen) {
                exitFullscreen();
            }
        }

        function handleTouchStart(e) {
            if (e.touches.length === 2) {
                isPinching = true;
                isSwiping = false;
                initialPinchDistance = getDistance(e.touches[0], e.touches[1]);
                pinchStartScale = scale;
                if (window.navigator.vibrate) window.navigator.vibrate(5);
                e.preventDefault();
            } else if (e.touches.length === 1 && !isPinching) {
                isSwiping = true;
                isPinching = false;
                touchStartX = e.touches[0].clientX;
                touchStartY = e.touches[0].clientY;
            }
        }

        function handleTouchMove(e) {
            if (isPinching && e.touches.length === 2) {
                const currentDistance = getDistance(e.touches[0], e.touches[1]);
                const zoomFactor = currentDistance / initialPinchDistance;
                let newScale = pinchStartScale * zoomFactor;
                newScale = Math.max(0.5, Math.min(3.0, newScale));
                
                // ✅ SIMPLE: Just update transform immediately
                const container = document.getElementById('pdf-canvas');
                container.style.transform = `scale(${newScale})`;
                
                e.preventDefault();
            }
        }

        function handleTouchEnd(e) {
            if (isPinching) {
                isPinching = false;
                
                const container = document.getElementById('pdf-canvas');
                const computedStyle = window.getComputedStyle(container);
                const matrix = computedStyle.transform;

                let newScale = scale;
                if (matrix !== 'none' && matrix !== 'matrix(1, 0, 0, 1, 0, 0)') {
                    const values = matrix.split('(')[1].split(')')[0].split(',');
                    newScale = parseFloat(values[0]);
                }

                newScale = Math.max(0.5, Math.min(3.0, newScale));
                scale = newScale;
                
                if (window.navigator.vibrate) window.navigator.vibrate(10);
            } else if (isSwiping) {
                isSwiping = false;
                handleSwipeEnd(e);
            }
        }

        function getDistance(touch1, touch2) {
            const dx = touch2.clientX - touch1.clientX;
            const dy = touch2.clientY - touch1.clientY;
            return Math.sqrt(dx * dx + dy * dy);
        }

        function handleSwipeEnd(e) {
            const touchEndY = e.changedTouches[0].clientY;
            const deltaY = touchEndY - touchStartY;
            const now = Date.now();
            const deltaTime = now - lastSwipeTime;
            const absDeltaY = Math.abs(deltaY);
            const velocityY = absDeltaY / Math.max(deltaTime, 1);

            if (deltaTime < SWIPE_COOLDOWN_MS || absDeltaY < MIN_SWIPE_DISTANCE || velocityY < MIN_SWIPE_VELOCITY) {
                return;
            }

            lastSwipeTime = now;

            if (deltaY > 0) {
                showIndicator('▼', 800);
                previousPage();
            } else {
                showIndicator('▲', 800);
                nextPage();
            }

            if (window.navigator.vibrate) window.navigator.vibrate(15);
        }

        function showIndicator(text, duration = 1000) {
            const indicator = document.createElement('div');
            indicator.textContent = text;
            Object.assign(indicator.style, {
                position: 'fixed',
                top: text === '▲' ? '20px' : 'auto',
                bottom: text === '▼' ? '20px' : 'auto',
                left: '50%',
                transform: 'translateX(-50%)',
                background: 'rgba(0,0,0,0.8)',
                color: 'white',
                padding: '10px 20px',
                borderRadius: '20px',
                fontSize: '24px',
                fontWeight: 'bold',
                zIndex: 10003,
                opacity: '1',
                transition: 'opacity 0.3s'
            });
            document.body.appendChild(indicator);
            setTimeout(() => {
                indicator.style.opacity = '0';
                setTimeout(() => {
                    if (indicator.parentNode) {
                        document.body.removeChild(indicator);
                    }
                }, 300);
            }, duration);
        }

        // ======================
        // PAGE NAVIGATION
        // ======================
        function previousPage() {
            if (pageNum <= 1) return;
            pageNum--;
            scrollToPage();
            updateNavigationButtons();
        }

        function nextPage() {
            if (pageNum >= totalPages) return;
            pageNum++;
            scrollToPage();
            updateNavigationButtons();
        }

        function scrollToPage() {
            const target = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
            document.getElementById('page-num').textContent = pageNum;
        }

        function updateNavigationButtons() {
            const prevBtn = document.getElementById('prev-page');
            const nextBtn = document.getElementById('next-page');
            if (prevBtn) prevBtn.disabled = pageNum <= 1;
            if (nextBtn) nextBtn.disabled = pageNum >= totalPages;
        }

        // ======================
        // FULLSCREEN
        // ======================
        function toggleFullscreen() {
            if (!isFullscreen) {
                enterFullscreen();
            } else {
                exitFullscreen();
            }
        }

        function enterFullscreen() {
            const container = document.getElementById('main-container');
            const exitBtn = document.getElementById('exit-fullscreen-btn');

            // Try native fullscreen API first
            const requestFS = container.requestFullscreen || 
                            container.webkitRequestFullscreen || 
                            container.mozRequestFullScreen || 
                            container.msRequestFullscreen;
            
            if (requestFS) {
                requestFS.call(container)
                    .then(() => {
                        isFullscreen = true;
                        document.body.classList.add('fullscreen-mode');
                        exitBtn.style.display = 'flex';
                    })
                    .catch(() => {
                        fallbackFullscreen();
                    });
            } else {
                fallbackFullscreen();
            }
        }

        function fallbackFullscreen() {
            document.body.classList.add('fullscreen-mode');
            document.getElementById('exit-fullscreen-btn').style.display = 'flex';
            isFullscreen = true;
        }

        function exitFullscreen() {
            // Exit native fullscreen if active
            const exitFS = document.exitFullscreen || 
                         document.webkitExitFullscreen || 
                         document.mozCancelFullScreen || 
                         document.msExitFullscreen;
            
            if (exitFS && (document.fullscreenElement || 
                          document.webkitFullscreenElement || 
                          document.mozFullScreenElement || 
                          document.msFullscreenElement)) {
                exitFS.call(document);
            }
            
            // Always remove CSS fullscreen class
            document.body.classList.remove('fullscreen-mode');
            document.getElementById('exit-fullscreen-btn').style.display = 'none';
            isFullscreen = false;
        }

        // ======================
        // UTILITIES
        // ======================
        function tryGoogleViewer() {
            const pdfUrl = encodeURIComponent(window.location.origin + '/../user/<?php echo htmlspecialchars($material['material_file']); ?>');
            window.open(`https://docs.google.com/viewer?url=${pdfUrl}&embedded=true`, '_blank');
        }

        function downloadPDF() {
            const link = document.createElement('a');
            link.href = "../user/<?php echo htmlspecialchars($material['material_file']); ?>";
            link.download = "<?php echo htmlspecialchars($material['material_title']); ?>.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        <?php if (!$isAndroid): ?>
        // For non-Android devices using iframe
        let iframeScale = 1.0;

        function zoomIn() {
            if (iframeScale >= 2.0) return;
            iframeScale += 0.2;
            const iframe = document.getElementById('pdf-viewer');
            if (iframe) {
                iframe.style.transform = `scale(${iframeScale})`;
                iframe.style.transformOrigin = 'top left';
            }
        }

        function zoomOut() {
            if (iframeScale <= 0.6) return;
            iframeScale -= 0.2;
            const iframe = document.getElementById('pdf-viewer');
            if (iframe) {
                iframe.style.transform = `scale(${iframeScale})`;
                iframe.style.transformOrigin = 'top left';
            }
        }
        <?php endif; ?>
    </script>
</body>
</html>