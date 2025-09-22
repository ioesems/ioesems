<?php
session_start();

// Admin email
$admin_email = "mukeshsingh98121159@gmail.com ";

// Include config
include '../../components/login/config.php';

// Function to check if shayari exists in DB
function shayariExistsInDB($conn, $text) {
    $text = $conn->real_escape_string($text);
    $result = $conn->query("SELECT COUNT(*) as count FROM shayaris WHERE shayari_text = '$text'");
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}

$ALLOWED_CATEGORIES = ['random', 'success', 'love', 'attitude', 'positive', 'motivational'];

function fetchLiveShayari($category = 'random') {
    global $ALLOWED_CATEGORIES;

    $category = strtolower(trim($category));
    if (!in_array($category, $ALLOWED_CATEGORIES)) {
        $category = 'random';
    }

    // Build endpoint
    $api_url = "https://hindi-quotes.vercel.app/random";
    if ($category !== 'random') {
        $api_url .= "/" . rawurlencode($category);
    }

    $context = stream_context_create([
        'http' => [
            'timeout' => 25,
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
        ]
    ]);

    $response = @file_get_contents($api_url, false, $context);
    $data = $response ? json_decode($response, true) : null;

    if ($data && !empty($data['quote'])) {
        $shayari_text = trim($data['quote']);
        $api_type = !empty($data['type']) ? $data['type'] : $category;
        $category_display = $api_type ? ucfirst($api_type) : ucfirst($category);

        return [
            'text' => $shayari_text,
            'author' => 'अज्ञात',
            'category' => $category_display
        ];
    }

    return null;
}

if (isset($_GET['action']) && $_GET['action'] === 'get_new_unique_shayari') {
    header('Content-Type: application/json; charset=utf-8');

    $requested_cat = isset($_GET['cat']) ? $_GET['cat'] : 'random';

    global $ALLOWED_CATEGORIES;
    $requested_cat = strtolower(trim($requested_cat));
    if (!in_array($requested_cat, $ALLOWED_CATEGORIES)) {
        $requested_cat = 'random';
    }

    ignore_user_abort(false);
    set_time_limit(0);

    $attempt = 0;
    while (true) {
        $attempt++;

        if (connection_aborted()) {
            http_response_code(499);
            exit();
        }

        $shayari = fetchLiveShayari($requested_cat);

        if ($shayari && !shayariExistsInDB($conn, $shayari['text'])) {
            echo json_encode([
                'status' => 'success',
                'shayari' => $shayari,
                'attempt' => $attempt,
                'requested_category' => ucfirst($requested_cat)
            ], JSON_UNESCAPED_UNICODE);
            exit();
        }

        sleep(2);
    }
}

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

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $conn->query("DELETE FROM shayaris WHERE id=$id");
    header("Location: syari.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_shayari'])) {
    $id = (int)$_POST['shayari_id'];
    $shayari_text = $conn->real_escape_string($_POST['shayari_text']);
    $author = $conn->real_escape_string($_POST['author']);
    $category = $conn->real_escape_string($_POST['category']) ?: 'general';
    $conn->query("UPDATE shayaris SET shayari_text='$shayari_text', author='$author', category='$category' WHERE id=$id");
    header("Location: syari.php");
    exit();
}

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Shayaris - Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* Compact, no-scroll design for "Find New" section */
:root{
  --gap-sm:8px;
  --gap-md:12px;
  --btn-pad:8px 12px;
}
body { padding: 16px; font-family: 'Noto Sans Devanagari', 'Segoe UI', sans-serif; background: linear-gradient(to right,#ffeaa7,#fab1a0); }
.container { max-width: 900px; background: #fff; padding: 18px; border-radius: 10px; box-shadow: 0 6px 12px rgba(0,0,0,0.08);} 
h2 { font-weight:700; color:#743413; margin:6px 0 12px 0; font-size:1.05rem; }
.btn-custom { background: linear-gradient(135deg,#ff9f43 0%,#ee5a24 100%); color:#fff; border-radius:12px; font-weight:600; transition: all 0.12s ease; padding:6px 10px; }
.btn-custom:hover { transform: translateY(-1px); }

/* Shayari finder compact styles */
.shayari-finder-section { background: linear-gradient(135deg, #ffecb3, #ffa726); padding: 10px; border-radius: 10px; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.06); }
.shayari-header { display:flex; align-items:center; gap:8px; }
.shayari-title { font-size:1rem; font-weight:700; color:#6a1b9a; margin:0; }
.finder-note { margin:0; font-size:0.82rem; color:#5d4037; opacity:0.95; }

.found-shayari-display { background: rgba(255,255,255,0.95); padding: 10px; border-radius: 8px; margin: 10px 0; display: none; border-left: 4px solid #ffa726; white-space: pre-line; font-size: 0.95rem; line-height: 1.25; color: #5d4037; }
/* clamp shayari text to lines (no scrolling) */
.found-shayari-display .shayari-text { display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; }
.shayari-author { font-style: italic; color: #8d6e63; margin-top:6px; }
.shayari-category { font-size:0.85rem; color:#bf360c; margin-top:4px; }

.btn-find { background: linear-gradient(135deg, #8e24aa, #6a1b9a); color: white; border: none; border-radius: 10px; font-weight: 700; padding: var(--btn-pad); transition: all 0.12s ease; }
.btn-find:disabled { opacity:0.6; }
.btn-stop { background: linear-gradient(135deg, #dc3545, #c82333); color: white; border: none; border-radius: 10px; font-weight:700; padding: var(--btn-pad); margin-left: var(--gap-sm); display:none; }
.btn-add-found { background: linear-gradient(135deg, #28a745, #20c997); color: white; border: none; border-radius: 10px; font-weight:700; padding:6px 10px; }

.loading-spinner { display:none; text-align:center; padding:8px; border-radius:8px; margin:8px 0; }
.spinner { border:3px solid #f3f3f3; border-top:3px solid #ffa726; border-radius:50%; width:28px; height:28px; animation:spin 1s linear infinite; margin:0 auto 8px; }
.attempt-counter { font-size:0.95rem; color:#6a1b9a; font-weight:600; margin:4px 0; }
.status-message { font-size:0.88rem; color:#d35400; min-height:18px; }
.nothing-found { color:#c0392b; font-weight:700; margin-top:8px; display:none; }
@keyframes spin { 0%{transform:rotate(0);}100%{transform:rotate(360deg);} }

/* Reduce gaps globally */
.mb-3 { margin-bottom: 8px !important; }
.form-label { font-size:0.92rem; margin-bottom:6px; }
.form-control, .form-select { font-size:0.95rem; padding:6px 8px; }
.table { font-size:0.88rem; }

/* Remove scroll behavior: desktop */
/* Ensure found-shayari never shows scrollbar on desktop (we clamp it instead) */
.found-shayari-display { max-height: none !important; overflow: visible !important; }

/* Make table normal (no horizontal scroll wrapper) */
.table-responsive { overflow: visible !important; }

/* Modal: normal size */
.modal-dialog { max-width: 720px; }

/* Mobile tweaks: aggressively compact to fit single screen */
@media (max-width: 600px) {
  body { padding:10px; }
  .container { padding:12px; }
  h2 { font-size:1rem; }
  .shayari-finder-section { padding:8px; }
  .shayari-title { font-size:0.98rem; }
  .finder-note { display:none; } /* hide explanatory note to save space */

  /* make controls very compact and in a single row if possible */
  .btn-find, .btn-stop { padding:6px 10px; font-size:0.92rem; }
  .btn-stop { margin-left:6px; }
  .found-shayari-display { padding:8px; font-size:0.9rem; }
  .found-shayari-display .shayari-text { -webkit-line-clamp: 5; }
  .shayari-author, .shayari-category { font-size:0.82rem; }

  /* reduce spacing of forms and lists */
  .mb-3 { margin-bottom:6px !important; }
  .form-control, .form-select { font-size:0.9rem; padding:6px; }

  /* make action buttons small and stacked if needed */
  .btn-custom, .btn-add-found { padding:6px 8px; border-radius:9px; }
  .btn-find { flex:1 1 auto; }
}

/* Very small devices (<=360px) - squeeze further */
@media (max-width:360px) {
  .found-shayari-display .shayari-text { -webkit-line-clamp: 4; font-size:0.86rem; }
  h2 { font-size:0.95rem; }
  .btn-find, .btn-stop { font-size:0.88rem; padding:6px 8px; }
}
</style>
</head>
<body>
<div class="container">

<!-- Shayari Finder Section -->
<div class="shayari-finder-section">
    <div class="shayari-header">
      <h2 class="shayari-title"><i class="fas fa-search"></i> Find NEW Shayari</h2>
      <div style="margin-left:auto; text-align:right; font-size:0.82rem; color:#5d4037;">No duplicates</div>
    </div>
    <p class="finder-note">System will keep searching until it finds a unique shayari. Press "Stop" to cancel.</p>
    
    <div style="margin-bottom:8px; display:flex; gap:8px; align-items:center;">
        <select id="finderCategory" class="form-select" style="max-width:220px; min-width:120px;">
            <option value="random">Random</option>
            <option value="success">Success</option>
            <option value="love">Love</option>
            <option value="attitude">Attitude</option>
            <option value="positive">Positive</option>
            <option value="motivational">Motivational</option>
        </select>

        <div style="display:flex; gap:8px; margin-left:auto;">
          <button type="button" class="btn btn-find" id="btnFind" onclick="findUniqueShayari()">Start</button>
          <button type="button" class="btn btn-stop" id="btnStop" onclick="stopFindingShayari()">Stop</button>
        </div>
    </div>
    
    <!-- Loading & Status -->
    <div class="loading-spinner" id="loadingSpinner">
        <div class="spinner"></div>
        <div class="attempt-counter" id="attemptCounter">Attempt: 1</div>
        <div class="status-message" id="statusMessage">Idle</div>
    </div>
    
    <!-- Found Shayari Display -->
    <div class="found-shayari-display" id="foundShayariDisplay">
        <div class="shayari-text" id="foundShayariText"></div>
        <div class="shayari-author" id="foundShayariAuthor">- अज्ञात</div>
        <div class="shayari-category" id="foundShayariCategory">Category: -</div>
        
        <form method="POST" style="display:inline; margin-top:6px;">
            <input type="hidden" name="found_shayari_text" id="hiddenShayariText">
            <input type="hidden" name="found_author" id="hiddenAuthor">
            <input type="hidden" name="found_category" id="hiddenCategory">
            <button type="submit" name="add_found_shayari" class="btn btn-add-found">Add</button>
        </form>
    </div>

    <!-- Nothing Found Message -->
    <div class="nothing-found" id="nothingFoundMessage">❌ Search stopped. No new shayari yet.</div>
</div>

<h2 style="margin-top:6px;">Add a New Shayari</h2>
<?= $action_message ?>
<form method="POST">
<div class="mb-3">
  <label for="shayari_text" class="form-label">Shayari Text</label>
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
<th style="width:40px;">ID</th>
<th>Shayari</th>
<th style="width:120px;">Author</th>
<th style="width:100px;">Category</th>
<th style="width:140px;">Date Added</th>
<th style="width:110px;">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($shayaris as $s): ?>
<tr>
<td><?= $s['id'] ?></td>
<td style="white-space: pre-line; max-width:360px;"><?= htmlspecialchars($s['shayari_text']) ?></td>
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
    document.getElementById('statusMessage').innerText = '📡 Contacting API...';

    abortController = new AbortController();

    const cat = document.getElementById('finderCategory').value || 'random';
    fetchUniqueShayari(1, cat);
}

function stopFindingShayari() {
    if (abortController) {
        abortController.abort();
    }
    resetUI();
    document.getElementById('nothingFoundMessage').style.display = 'block';
}

function fetchUniqueShayari(attempt, category) {
    if (!findingShayari) return;

    document.getElementById('attemptCounter').innerText = 'Attempt: ' + attempt;
    document.getElementById('statusMessage').innerText = '🔍 Trying ' + attempt + ' (' + capitalize(category) + ')';

    fetch('?action=get_new_unique_shayari&cat=' + encodeURIComponent(category), { signal: abortController.signal })
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok: ' + response.status);
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
                document.getElementById('statusMessage').innerText = '🎉 Found on attempt ' + data.attempt;
            } else {
                setTimeout(() => fetchUniqueShayari(attempt + 1, category), 1200);
            }
        })
        .catch(error => {
            if (error.name === 'AbortError') {
                resetUI();
                document.getElementById('statusMessage').innerText = '🛑 Stopped by user';
                document.getElementById('nothingFoundMessage').style.display = 'block';
            } else {
                console.error('Error at attempt ' + attempt + ':', error);
                setTimeout(() => fetchUniqueShayari(attempt + 1, category), 1000);
            }
        });
}

function resetUI() {
    findingShayari = false;
    document.getElementById('btnFind').disabled = false;
    document.getElementById('btnStop').style.display = 'none';
    document.getElementById('loadingSpinner').style.display = 'none';
}

function capitalize(s) { if(!s) return s; return s.charAt(0).toUpperCase() + s.slice(1); }
</script>
</body>
</html>
