<?php
session_start();

// Admin email
$admin_email = "mukeshsingh98121159@gmail.com ";

// // Only allow logged-in admin
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     echo "<h3 style='color:red; text-align:center; margin-top:50px;'>Unauthorized Access</h3>";
//     exit();
// }

// Include config
include '../../components/login/config.php';

// Function to check if shayari exists in DB
function shayariExistsInDB($conn, $text) {
    $text = $conn->real_escape_string($text);
    $result = $conn->query("SELECT COUNT(*) as count FROM shayaris WHERE shayari_text = '$text'");
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}

// Live Shayari fetching function — NO FALLBACK
function fetchLiveShayari() {
    $api_url = "https://www.purevichar.in/api/shayari/";

    // Increase timeout for slow API
    $context = stream_context_create([
        'http' => [
            'timeout' => 30, // 30 seconds timeout
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ]
    ]);

    $response = @file_get_contents($api_url, false, $context);
    $data = $response ? json_decode($response, true) : null;

    if ($data && !empty($data['shayari']) && !empty($data['shayari'][0])) {
        $shayari_data = $data['shayari'][0];
        $quote_lines = $shayari_data['quote'] ?? [];
        $shayari_text = implode("\n", $quote_lines);
        $author = $shayari_data['author'] ?? 'अज्ञात';
        $category = $shayari_data['category'] ?? 'general';

        return [
            'text' => $shayari_text,
            'author' => $author,
            'category' => $category
        ];
    }

    return null; // API failed or returned no usable data
}

// Handle AJAX request for new UNIQUE shayari — INFINITE RETRY MODE
if (isset($_GET['action']) && $_GET['action'] === 'get_new_unique_shayari') {
    header('Content-Type: application/json');

    global $conn;

    ignore_user_abort(false); // Allow user to abort via Stop button
    set_time_limit(0); // Let script run as long as needed

    $attempt = 0;

    while (true) { // Infinite loop until success or user aborts
        $attempt++;

        // Check if client disconnected (user pressed Stop)
        if (connection_aborted()) {
            error_log("User aborted shayari search at attempt $attempt");
            exit();
        }

        $shayari = fetchLiveShayari();

        if ($shayari && !shayariExistsInDB($conn, $shayari['text'])) {
            echo json_encode([
                'status' => 'success',
                'shayari' => $shayari,
                'attempt' => $attempt
            ]);
            exit();
        }

        // Small delay before next retry — be gentle on the API
        sleep(2); // Wait 2 seconds before retrying
    }
}

// Handle Add Shayari from Internet
$action_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_found_shayari'])) {
    $shayari_text = trim($_POST['found_shayari_text']);
    $author = trim($_POST['found_author']);
    $category = trim($_POST['found_category']) ?: 'general';

    if (!empty($shayari_text) && !empty($author)) {
        $shayari_text = $conn->real_escape_string($shayari_text);
        $author = $conn->real_escape_string($author);
        $category = $conn->real_escape_string($category);
        $sql = "INSERT INTO shayaris (shayari_text, author, category) VALUES ('$shayari_text', '$author', '$category')";
        if ($conn->query($sql) === TRUE) {
            $action_message = "<div class='alert alert-success'>Shayari from internet added successfully!</div>";
        } else {
            $action_message = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    } else {
        $action_message = "<div class='alert alert-warning'>No shayari found to add.</div>";
    }
}

// Handle Add Shayari (Manual)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_shayari'])) {
    $shayari_text = trim($_POST['shayari_text']);
    $author = trim($_POST['author']);
    $category = trim($_POST['category']) ?: 'general';

    if (!empty($shayari_text) && !empty($author)) {
        $shayari_text = $conn->real_escape_string($shayari_text);
        $author = $conn->real_escape_string($author);
        $category = $conn->real_escape_string($category);
        $sql = "INSERT INTO shayaris (shayari_text, author, category) VALUES ('$shayari_text', '$author', '$category')";
        if ($conn->query($sql) === TRUE) {
            $action_message = "<div class='alert alert-success'>Shayari added successfully!</div>";
        } else {
            $action_message = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    } else {
        $action_message = "<div class='alert alert-warning'>Please fill in both fields.</div>";
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $conn->query("DELETE FROM shayaris WHERE id=$id");
    header("Location: syari.php");
    exit();
}

// Handle Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_shayari'])) {
    $id = (int)$_POST['shayari_id'];
    $shayari_text = $conn->real_escape_string($_POST['shayari_text']);
    $author = $conn->real_escape_string($_POST['author']);
    $category = $conn->real_escape_string($_POST['category']) ?: 'general';
    $conn->query("UPDATE shayaris SET shayari_text='$shayari_text', author='$author', category='$category' WHERE id=$id");
    header("Location: syari.php");
    exit();
}

// Fetch all shayaris
$result = $conn->query("SELECT * FROM shayaris ORDER BY date_added DESC");
$shayaris = [];
while ($row = $result->fetch_assoc()) {
    $shayaris[] = $row;
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
<meta charset="UTF-8">
<title>Manage Shayaris - Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { padding: 40px; font-family: 'Noto Sans Devanagari', 'Segoe UI', sans-serif; background: linear-gradient(to right,#ffeaa7,#fab1a0);}
.container { max-width: 800px; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 6px 15px rgba(0,0,0,0.1);}
h2 { font-weight:bold; color:#743413; margin-bottom:20px;}
.btn-custom { background: linear-gradient(135deg,#ff9f43 0%,#ee5a24 100%); color:#fff; border-radius:25px; font-weight:bold; transition: all 0.3s ease;}
.btn-custom:hover { background: linear-gradient(135deg,#ee5a24 0%,#ff9f43 100%); transform: scale(1.05);}

/* Shayari finder styles */
.shayari-finder-section {
    background: linear-gradient(135deg, #ffecb3, #ffa726);
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 30px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
.found-shayari-display {
    background: rgba(255,255,255,0.9);
    padding: 20px;
    border-radius: 8px;
    margin: 15px 0;
    display: none;
    border-left: 4px solid #ffa726;
    white-space: pre-line;
    font-size: 1.1rem;
    line-height: 1.6;
    color: #5d4037;
}
.shayari-text {
    margin-bottom: 10px;
    font-weight: 500;
}
.shayari-author {
    font-style: italic;
    color: #8d6e63;
    margin-bottom: 5px;
}
.shayari-category {
    font-size: 0.9rem;
    color: #bf360c;
    margin-bottom: 15px;
}
.btn-find {
    background: linear-gradient(135deg, #8e24aa, #6a1b9a);
    color: white;
    border: none;
    border-radius: 25px;
    font-weight: bold;
    padding: 10px 25px;
    transition: all 0.3s ease;
}
.btn-find:hover {
    background: linear-gradient(135deg, #6a1b9a, #8e24aa);
    transform: scale(1.05);
}
.btn-stop {
    background: linear-gradient(135deg, #dc3545, #c82333);
    color: white;
    border: none;
    border-radius: 25px;
    font-weight: bold;
    padding: 10px 25px;
    margin-left: 10px;
    display: none;
    transition: all 0.3s ease;
}
.btn-stop:hover {
    background: linear-gradient(135deg, #c82333, #dc3545);
    transform: scale(1.05);
}
.btn-add-found {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    border: none;
    border-radius: 25px;
    font-weight: bold;
    padding: 8px 20px;
    transition: all 0.3s ease;
}
.btn-add-found:hover {
    background: linear-gradient(135deg, #20c997, #28a745);
    transform: scale(1.05);
}
.loading-spinner {
    display: none;
    text-align: center;
    padding: 30px;
    background: rgba(255,255,255,0.7);
    border-radius: 10px;
    margin: 20px 0;
}
.spinner {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #ffa726;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
    margin: 0 auto 15px;
}
.attempt-counter {
    font-size: 1.1rem;
    color: #d35400;
    margin: 10px 0;
    font-weight: 600;
}
.status-message {
    font-size: 0.95rem;
    color: #e67e22;
    margin: 5px 0;
    font-weight: 500;
    min-height: 24px;
}
.waiting-message {
    color: #2980b9;
    font-weight: 500;
    font-style: italic;
}
.nothing-found {
    color: #c0392b;
    font-weight: bold;
    margin-top: 10px;
    display: none;
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<div class="container">

<!-- Shayari Finder Section -->
<div class="shayari-finder-section">
    <h2><i class="fas fa-search"></i> Find NEW Shayari (No Duplicates)</h2>
    <p>System will keep searching <strong>forever</strong> until it finds a unique shayari. Press “Stop” to cancel.</p>
    
    <div>
        <button type="button" class="btn btn-find" id="btnFind" onclick="findUniqueShayari()">
            <i class="fas fa-globe"></i> Start Finding Shayari
        </button>
        <button type="button" class="btn btn-stop" id="btnStop" onclick="stopFindingShayari()" style="display:none;">
            <i class="fas fa-stop"></i> Stop
        </button>
    </div>
    
    <!-- Loading & Status -->
    <div class="loading-spinner" id="loadingSpinner">
        <div class="spinner"></div>
        <div class="waiting-message">⏳ Waiting for response from server... API is slow, please be patient.</div>
        <div class="attempt-counter" id="attemptCounter">Attempt: 1</div>
        <div class="status-message" id="statusMessage">Checking for new shayari...</div>
    </div>
    
    <!-- Found Shayari Display -->
    <div class="found-shayari-display" id="foundShayariDisplay">
        <div class="shayari-text" id="foundShayariText"></div>
        <div class="shayari-author" id="foundShayariAuthor"></div>
        <div class="shayari-category" id="foundShayariCategory"></div>
        
        <form method="POST" style="display: inline;">
            <input type="hidden" name="found_shayari_text" id="hiddenShayariText">
            <input type="hidden" name="found_author" id="hiddenAuthor">
            <input type="hidden" name="found_category" id="hiddenCategory">
            <button type="submit" name="add_found_shayari" class="btn btn-add-found">
                <i class="fas fa-plus"></i> Add Shayari to Database
            </button>
        </form>
    </div>

    <!-- Nothing Found Message (hidden by default, shown only if user stops) -->
    <div class="nothing-found" id="nothingFoundMessage">
        ❌ Search stopped. No new shayari found yet. Try again or add manually.
    </div>
</div>

<h2>Add a New Shayari</h2>
<?= $action_message ?>
<form method="POST">
<div class="mb-3">
  <label for="shayari_text" class="form-label">Shayari Text (Use \\n for new line)</label>
  <textarea id="shayari_text" name="shayari_text" class="form-control" rows="4" required style="font-family: 'Noto Sans Devanagari', sans-serif;"></textarea>
</div>
<div class="mb-3">
  <label for="author" class="form-label">Author</label>
  <input type="text" id="author" name="author" class="form-control" required>
</div>
<div class="mb-3">
  <label for="category" class="form-label">Category (optional)</label>
  <input type="text" id="category" name="category" class="form-control" placeholder="e.g., love, heartbreak, philosophy">
</div>
<button type="submit" name="add_shayari" class="btn btn-custom">Add Shayari</button>
</form>

<hr>

<h2>Existing Shayaris</h2>
<table class="table table-bordered table-striped mt-3">
<thead>
<tr>
<th>ID</th>
<th>Shayari</th>
<th>Author</th>
<th>Category</th>
<th>Date Added</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($shayaris as $s): ?>
<tr>
<td><?= $s['id'] ?></td>
<td style="white-space: pre-line;"><?= htmlspecialchars($s['shayari_text']) ?></td>
<td><?= htmlspecialchars($s['author']) ?></td>
<td><?= htmlspecialchars($s['category']) ?></td>
<td><?= $s['date_added'] ?></td>
<td>
  <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $s['id'] ?>">Edit</button>
  <a href="?delete=<?= $s['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?= $s['id'] ?>" tabindex="-1" aria-labelledby="editLabel<?= $s['id'] ?>" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="editLabel<?= $s['id'] ?>">Edit Shayari</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form method="POST">
<div class="modal-body">
<input type="hidden" name="shayari_id" value="<?= $s['id'] ?>">
<div class="mb-3">
  <label class="form-label">Shayari Text</label>
  <textarea name="shayari_text" class="form-control" rows="4" required style="font-family: 'Noto Sans Devanagari', sans-serif;"><?= htmlspecialchars($s['shayari_text']) ?></textarea>
</div>
<div class="mb-3">
  <label class="form-label">Author</label>
  <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($s['author']) ?>" required>
</div>
<div class="mb-3">
  <label class="form-label">Category</label>
  <input type="text" name="category" class="form-control" value="<?= htmlspecialchars($s['category']) ?>">
</div>
</div>
<div class="modal-footer">
<button type="submit" name="edit_shayari" class="btn btn-custom">Save Changes</button>
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
</div>
</form>
</div>
</div>
</div>

<?php endforeach; ?>
</tbody>
</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
let findingShayari = false;
let abortController = null;

function findUniqueShayari() {
    if (findingShayari) return;

    findingShayari = true;
    document.getElementById('btnFind').disabled = true;
    document.getElementById('btnStop').style.display = 'inline-block';
    document.getElementById('loadingSpinner').style.display = 'block';
    document.getElementById('foundShayariDisplay').style.display = 'none';
    document.getElementById('nothingFoundMessage').style.display = 'none';
    document.getElementById('attemptCounter').innerText = 'Attempt: 1';
    document.getElementById('statusMessage').innerText = '📡 Contacting API... This may take a while.';

    abortController = new AbortController();

    fetchUniqueShayari(1);
}

function stopFindingShayari() {
    if (abortController) {
        abortController.abort();
    }
    resetUI();
    document.getElementById('nothingFoundMessage').style.display = 'block';
}

function fetchUniqueShayari(attempt) {
    if (!findingShayari) return;

    document.getElementById('attemptCounter').innerText = 'Attempt: ' + attempt;
    document.getElementById('statusMessage').innerText = '🔍 Checking shayari ' + attempt + '... (API is slow, please wait)';

    fetch('?action=get_new_unique_shayari', { signal: abortController.signal })
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                resetUI();
                document.getElementById('foundShayariText').innerText = data.shayari.text;
                document.getElementById('foundShayariAuthor').innerText = '- ' + data.shayari.author;
                document.getElementById('foundShayariCategory').innerText = 'Category: ' + data.shayari.category;
                
                document.getElementById('hiddenShayariText').value = data.shayari.text;
                document.getElementById('hiddenAuthor').value = data.shayari.author;
                document.getElementById('hiddenCategory').value = data.shayari.category;
                
                document.getElementById('foundShayariDisplay').style.display = 'block';
                document.getElementById('statusMessage').innerText = '🎉 Success! Found new shayari on attempt ' + data.attempt;
            }
        })
        .catch(error => {
            if (error.name === 'AbortError') {
                console.log('Fetch aborted by user at attempt ' + attempt);
                resetUI();
                document.getElementById('statusMessage').innerText = '🛑 Search stopped by you at attempt ' + attempt;
                document.getElementById('nothingFoundMessage').style.display = 'block';
            } else {
                console.error('Error at attempt ' + attempt + ':', error);
                // Keep retrying — don't break the loop
                setTimeout(() => fetchUniqueShayari(attempt + 1), 1000);
            }
        });
}

function resetUI() {
    findingShayari = false;
    document.getElementById('btnFind').disabled = false;
    document.getElementById('btnStop').style.display = 'none';
    document.getElementById('loadingSpinner').style.display = 'none';
}
</script>
</body>
</html>