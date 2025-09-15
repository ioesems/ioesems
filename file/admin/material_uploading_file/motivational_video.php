<?php 
include '../../../components/login/config.php'; 
include '../../../components/head-foot/header.php';

// Function to search for motivational videos from YouTube API (simulated)
function findMotivationalVideo() {
    // Predefined motivational videos for engineering students
    $motivational_videos = [
        [
            'title' => 'The Power of Yet - Growth Mindset for Students',
            'video_id' => 'hiiEeMN7vbQ',
            'description' => 'Learn about the growth mindset and how adding "yet" to your vocabulary can transform your learning experience.'
        ],
        [
            'title' => 'Why Engineering Students Should Never Give Up',
            'video_id' => 'KxGRhd_iWuE',
            'description' => 'Inspiring stories of engineers who overcame failures and challenges to achieve success.'
        ],
        [
            'title' => 'Study Smart, Not Hard - Engineering Study Tips',
            'video_id' => 'IlU-zDU6aQ0',
            'description' => 'Effective study strategies and time management techniques specifically for engineering students.'
        ],
        [
            'title' => 'The Engineering Mindset - Problem Solving Skills',
            'video_id' => 'bitqgxENx8c',
            'description' => 'Develop critical thinking and problem-solving skills that every engineer needs.'
        ],
        [
            'title' => 'From Failure to Success - Engineering Journey',
            'video_id' => 'RUzquEya6Lc',
            'description' => 'Real stories of engineering students who turned their failures into stepping stones for success.'
        ],
        [
            'title' => 'Time Management for Engineering Students',
            'video_id' => 'WPYOG93abDg',
            'description' => 'Master the art of balancing academics, projects, and personal life as an engineering student.'
        ],
        [
            'title' => 'Innovation in Engineering - Think Different',
            'video_id' => 'PVJzv0phJyc',
            'description' => 'How to develop innovative thinking and creative problem-solving in engineering.'
        ],
        [
            'title' => 'Building Confidence in Engineering',
            'video_id' => 'H14bBuluwB8',
            'description' => 'Overcome imposter syndrome and build confidence in your engineering abilities.'
        ],
        [
            'title' => 'The Future of Engineering - Career Motivation',
            'video_id' => 'nOwWB5OYcUE',
            'description' => 'Explore exciting career opportunities and future trends in engineering fields.'
        ],
        [
            'title' => 'Engineering Ethics and Social Responsibility',
            'video_id' => 'kVk9a5Jcd1k',
            'description' => 'Understanding the role of engineers in society and ethical decision-making.'
        ]
    ];
    
    // Return a random video
    $random_video = $motivational_videos[array_rand($motivational_videos)];
    return [
        'status' => 'success',
        'video' => $random_video
    ];
}

// Handle AJAX request for finding videos
if (isset($_GET['action']) && $_GET['action'] === 'find_video') {
    header('Content-Type: application/json');
    $video_result = findMotivationalVideo();
    echo json_encode($video_result);
    exit();
}

// Handle Add Video from Search
$action_message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_found_video'])) {
    $title = trim($_POST['found_title']);
    $video_id = trim($_POST['found_video_id']);
    $description = trim($_POST['found_description']);

    if (!empty($title) && !empty($video_id)) {
        $stmt = $conn->prepare("INSERT INTO motivational_videos (title, youtube_link, description) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $video_id, $description);
        if ($stmt->execute()) {
            $action_message = "<div class='alert alert-success'>Video from search added successfully!</div>";
        } else {
            $action_message = "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        $action_message = "<div class='alert alert-warning'>No video found to add.</div>";
    }
}

// Handle manual form submission (original functionality)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_manual_video'])) {
    $title = trim($_POST['title']);
    $link = trim($_POST['youtube_link']);
    $description = trim($_POST['description']);

    // Extract video ID if full YouTube URL is provided
    if (preg_match('/v=([a-zA-Z0-9_-]+)/', $link, $matches)) {
        $videoId = $matches[1];
    } else {
        $videoId = $link; // assume user provided ID directly
    }

    $stmt = $conn->prepare("INSERT INTO motivational_videos (title, youtube_link, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $videoId, $description);
    if ($stmt->execute()) {
        $action_message = "<div class='alert alert-success'>Video added successfully!</div>";
    } else {
        $action_message = "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }
    $stmt->close();
}

// Fetch existing videos
$result = $conn->query("SELECT * FROM motivational_videos ORDER BY id DESC LIMIT 10");
$videos = [];
while ($row = $result->fetch_assoc()) {
    $videos[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Motivational Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { 
            padding: 40px; 
            font-family: 'Segoe UI', sans-serif; 
            background: linear-gradient(to right, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container { 
            max-width: 900px; 
            background: rgba(255, 255, 255, 0.95); 
            padding: 30px; 
            border-radius: 15px; 
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        h3 { 
            font-weight: bold; 
            color: #4a5568; 
            margin-bottom: 25px;
            text-align: center;
        }
        .btn-custom { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            color: #fff; 
            border-radius: 25px; 
            font-weight: bold; 
            transition: all 0.3s ease;
            border: none;
        }
        .btn-custom:hover { 
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); 
            transform: scale(1.05);
            color: #fff;
        }

        /* Video Finder Section */
        .video-finder-section {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        .found-video-display {
            background: rgba(255,255,255,0.9);
            padding: 25px;
            border-radius: 12px;
            margin: 20px 0;
            display: none;
            border-left: 5px solid #667eea;
        }
        .video-preview {
            width: 100%;
            max-width: 400px;
            height: 225px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .video-title { 
            font-size: 1.2rem; 
            font-weight: bold; 
            color: #2d3748;
            margin-bottom: 10px;
        }
        .video-description { 
            color: #4a5568;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        .btn-find { 
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); 
            color: white; 
            border: none;
            border-radius: 25px;
            font-weight: bold;
            padding: 12px 30px;
            transition: all 0.3s ease;
        }
        .btn-find:hover { 
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); 
            transform: scale(1.05);
            color: white;
        }
        .btn-add-found {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: white;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            padding: 10px 25px;
            transition: all 0.3s ease;
        }
        .btn-add-found:hover {
            background: linear-gradient(135deg, #38f9d7 0%, #43e97b 100%);
            transform: scale(1.05);
            color: white;
        }
        .loading-spinner {
            display: none;
            text-align: center;
            padding: 30px;
        }
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #667eea;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 15px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .patience-message {
            color: #4a5568;
            font-weight: 500;
            margin-top: 10px;
        }
        
        /* Existing Videos Section */
        .video-card {
            background: rgba(255,255,255,0.9);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .video-card:hover {
            transform: translateY(-5px);
        }
        .video-thumbnail {
            width: 100%;
            max-width: 200px;
            height: 112px;
            border-radius: 8px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Video Finder Section -->
    <div class="video-finder-section">
        <h3><i class="fas fa-search"></i> Find Motivational Videos</h3>
        <p class="text-center">Discover inspiring videos for engineering students and add them to your collection.</p>
        
        <div class="text-center">
            <button type="button" class="btn btn-find" onclick="findVideo()">
                <i class="fas fa-video"></i> Find Motivational Video
            </button>
        </div>
        
        <!-- Loading Animation -->
        <div class="loading-spinner" id="loadingSpinner">
            <div class="spinner"></div>
            <div>Searching for videos...</div>
            <div class="patience-message">Thank you for your patience</div>
        </div>
        
        <!-- Found Video Display -->
        <div class="found-video-display" id="foundVideoDisplay">
            <div class="row">
                <div class="col-md-5">
                    <iframe id="videoPreview" class="video-preview" src="" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-7">
                    <div class="video-title" id="foundVideoTitle"></div>
                    <div class="video-description" id="foundVideoDescription"></div>
                    
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="found_title" id="hiddenTitle">
                        <input type="hidden" name="found_video_id" id="hiddenVideoId">
                        <input type="hidden" name="found_description" id="hiddenDescription">
                        <button type="submit" name="add_found_video" class="btn btn-add-found">
                            <i class="fas fa-plus"></i> Add Video to Database
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h3><i class="fas fa-plus-circle"></i> Add Motivational Video Manually</h3>
    <?= $action_message ?>
    
    <form method="POST" class="mb-5">
        <div class="mb-3">
            <label class="form-label"><i class="fas fa-heading"></i> Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label"><i class="fab fa-youtube"></i> YouTube Link or Video ID</label>
            <input type="text" name="youtube_link" class="form-control" placeholder="https://youtube.com/watch?v=... or just video ID" required>
        </div>
        <div class="mb-3">
            <label class="form-label"><i class="fas fa-align-left"></i> Description</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Brief description of the video..."></textarea>
        </div>
        <button type="submit" name="add_manual_video" class="btn btn-custom">
            <i class="fas fa-save"></i> Add Video
        </button>
    </form>

    <!-- Recent Videos Section -->
    <hr>
    <h3><i class="fas fa-video"></i> Recent Videos</h3>
    <div class="row">
        <?php foreach($videos as $video): ?>
        <div class="col-md-6 mb-4">
            <div class="video-card">
                <div class="row">
                    <div class="col-5">
                        <img src="https://img.youtube.com/vi/<?= htmlspecialchars($video['youtube_link']) ?>/mqdefault.jpg" 
                             alt="<?= htmlspecialchars($video['title']) ?>" 
                             class="video-thumbnail">
                    </div>
                    <div class="col-7">
                        <h6 class="video-title"><?= htmlspecialchars($video['title']) ?></h6>
                        <p class="small text-muted"><?= htmlspecialchars(substr($video['description'], 0, 80)) ?>...</p>
                        <a href="https://youtube.com/watch?v=<?= htmlspecialchars($video['youtube_link']) ?>" 
                           target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-play"></i> Watch
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
let isLoading = false;

function findVideo() {
    if (isLoading) return;
    
    console.log('Finding video...'); // Debug log
    isLoading = true;
    document.getElementById('loadingSpinner').style.display = 'block';
    document.getElementById('foundVideoDisplay').style.display = 'none';
    
    // Get current page URL and add action parameter
    const currentUrl = window.location.href.split('?')[0];
    const fetchUrl = currentUrl + '?action=find_video';
    
    console.log('Fetching from:', fetchUrl); // Debug log
    
    fetch(fetchUrl)
        .then(response => {
            console.log('Response status:', response.status); // Debug log
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Received data:', data); // Debug log
            isLoading = false;
            document.getElementById('loadingSpinner').style.display = 'none';
            
            if (data.status === 'success' && data.video) {
                // Display the found video
                document.getElementById('foundVideoTitle').innerHTML = data.video.title;
                document.getElementById('foundVideoDescription').innerHTML = data.video.description;
                document.getElementById('videoPreview').src = `https://www.youtube.com/embed/${data.video.video_id}`;
                
                // Set hidden form values
                document.getElementById('hiddenTitle').value = data.video.title;
                document.getElementById('hiddenVideoId').value = data.video.video_id;
                document.getElementById('hiddenDescription').value = data.video.description;
                
                // Show the found video display
                document.getElementById('foundVideoDisplay').style.display = 'block';
                
                // Scroll to the video
                document.getElementById('foundVideoDisplay').scrollIntoView({ behavior: 'smooth' });
            } else {
                alert('No video data received. Please try again.');
                console.error('Invalid data structure:', data);
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
            isLoading = false;
            document.getElementById('loadingSpinner').style.display = 'none';
            alert('Error finding video: ' + error.message + '. Please check console for details.');
        });
}
</script>

</body>
</html>

<?php include '../../../components/head-foot/footer.php'; ?>