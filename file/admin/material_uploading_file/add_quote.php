<?php
session_start();

// Admin email
$admin_email = "mukeshsingh98121159@gmail.com ";

// Only allow logged-in admin
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true
    // || $_SESSION['email'] == $admin_email
    ) {

    echo "<h3 style='color:red; text-align:center; margin-top:50px;'>Unauthorized Access</h3>";
    exit();
}

// Include config
include '../../../components/login/config.php';

// Live quote fetching function (from index.php)
function fetchLiveEngineeringQuote() {
    // 1. Fetch all quotes from ZenQuotes API
    $zen_api = "https://zenquotes.io/api/quotes";
    $quotes_json = @file_get_contents($zen_api);
    $all_quotes = $quotes_json ? json_decode($quotes_json, true) : [];

    // 2. Define keywords relevant to engineering students
    $keywords = ['study','learn','knowledge','work','effort','problem','success','engineer','goal','focus','achievement','discipline'];

    // 3. Filter quotes containing keywords
    $filtered = [];
    if($all_quotes){
        foreach($all_quotes as $q){
            foreach($keywords as $k){
                if(stripos($q['q'], $k) !== false){
                    $filtered[] = $q;
                    break;
                }
            }
        }
    }

    // 4. Fallback if no quotes found
    if(empty($filtered)){
        $filtered = [
            ['q'=>'Success is not final, failure is not fatal: it is the courage to continue that counts.','a'=>'Winston Churchill'],
            ['q'=>'Learning never exhausts the mind.','a'=>'Leonardo da Vinci'],
            ['q'=>'The best way to predict the future is to invent it.','a'=>'Alan Kay'],
            ['q'=>'The engineer has been, and is, a maker of history.','a'=>'James Kip Finch'],
            ['q'=>'Engineering is the art of directing the great sources of power in nature for the use and convenience of man.','a'=>'Thomas Tredgold']
        ];
    }

    // 5. Pick one random quote
    $best_quote = $filtered[array_rand($filtered)];
    return [
        'text' => $best_quote['q'],
        'author' => $best_quote['a']
    ];
}

// Handle AJAX request for new quotes
if (isset($_GET['action']) && $_GET['action'] === 'get_new_quote') {
    header('Content-Type: application/json');
    $new_quote = fetchLiveEngineeringQuote();
    echo json_encode([
        'status' => 'success',
        'quote' => $new_quote
    ]);
    exit();
}

// Handle Add Quote from Internet
$action_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_found_quote'])) {
    $quote_text = trim($_POST['found_quote_text']);
    $author = trim($_POST['found_author']);

    if (!empty($quote_text) && !empty($author)) {
        $quote_text = $conn->real_escape_string($quote_text);
        $author = $conn->real_escape_string($author);
        $sql = "INSERT INTO quotes (quote_text, author) VALUES ('$quote_text', '$author')";
        if ($conn->query($sql) === TRUE) {
            $action_message = "<div class='alert alert-success'>Quote from internet added successfully!</div>";
        } else {
            $action_message = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    } else {
        $action_message = "<div class='alert alert-warning'>No quote found to add.</div>";
    }
}

// Handle Add Quote (Original functionality)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_quote'])) {
    $quote_text = trim($_POST['quote_text']);
    $author = trim($_POST['author']);

    if (!empty($quote_text) && !empty($author)) {
        $quote_text = $conn->real_escape_string($quote_text);
        $author = $conn->real_escape_string($author);
        $sql = "INSERT INTO quotes (quote_text, author) VALUES ('$quote_text', '$author')";
        if ($conn->query($sql) === TRUE) {
            $action_message = "<div class='alert alert-success'>Quote added successfully!</div>";
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
    $conn->query("DELETE FROM quotes WHERE id=$id");
    header("Location: add_quote.php");
    exit();
}

// Handle Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_quote'])) {
    $id = (int)$_POST['quote_id'];
    $quote_text = $conn->real_escape_string($_POST['quote_text']);
    $author = $conn->real_escape_string($_POST['author']);
    $conn->query("UPDATE quotes SET quote_text='$quote_text', author='$author' WHERE id=$id");
    header("Location: add_quote.php");
    exit();
}

// Fetch all quotes
$result = $conn->query("SELECT * FROM quotes ORDER BY date_added DESC");
$quotes = [];
while ($row = $result->fetch_assoc()) {
    $quotes[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Quotes - Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { padding: 40px; font-family: 'Segoe UI', sans-serif; background: linear-gradient(to right,#f8ffb0,#c0e980);}
.container { max-width: 800px; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 6px 15px rgba(0,0,0,0.1);}
h2 { font-weight:bold; color:#1b3a1a; margin-bottom:20px;}
.btn-custom { background: linear-gradient(135deg,#a8e063 0%,#56ab2f 100%); color:#fff; border-radius:25px; font-weight:bold; transition: all 0.3s ease;}
.btn-custom:hover { background: linear-gradient(135deg,#56ab2f 0%,#a8e063 100%); transform: scale(1.05);}

/* New styles for quote finder */
.quote-finder-section {
    background: linear-gradient(135deg, #e6ffb3, #a8e063);
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 30px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
.found-quote-display {
    background: rgba(255,255,255,0.9);
    padding: 20px;
    border-radius: 8px;
    margin: 15px 0;
    display: none;
    border-left: 4px solid #56ab2f;
}
.quote-text { 
    font-size: 1.1rem; 
    font-weight: 500; 
    line-height: 1.4;
    margin-bottom: 10px;
    color: #1b3a1a;
}
.quote-author { 
    font-style: italic; 
    color: #2d5a2d;
    margin-bottom: 15px;
}
.btn-find { 
    background: linear-gradient(135deg, #17a2b8, #138496); 
    color: white; 
    border: none;
    border-radius: 25px;
    font-weight: bold;
    padding: 10px 25px;
    transition: all 0.3s ease;
}
.btn-find:hover { 
    background: linear-gradient(135deg, #138496, #17a2b8); 
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
    padding: 20px;
}
.spinner {
    border: 3px solid #f3f3f3;
    border-top: 3px solid #56ab2f;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 1s linear infinite;
    margin: 0 auto 10px;
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<div class="container">

<!-- Quote Finder Section -->
<div class="quote-finder-section">
    <h2><i class="fas fa-search"></i> Find Quotes from Internet</h2>
    <p>Discover inspiring quotes from around the web and add them to your database.</p>
    
    <button type="button" class="btn btn-find" onclick="findQuote()">
        <i class="fas fa-globe"></i> Find Quote
    </button>
    
    <!-- Loading Animation -->
    <div class="loading-spinner" id="loadingSpinner">
        <div class="spinner"></div>
        <div>Searching for quotes...</div>
    </div>
    
    <!-- Found Quote Display -->
    <div class="found-quote-display" id="foundQuoteDisplay">
        <div class="quote-text" id="foundQuoteText"></div>
        <div class="quote-author" id="foundQuoteAuthor"></div>
        
        <form method="POST" style="display: inline;">
            <input type="hidden" name="found_quote_text" id="hiddenQuoteText">
            <input type="hidden" name="found_author" id="hiddenAuthor">
            <button type="submit" name="add_found_quote" class="btn btn-add-found">
                <i class="fas fa-plus"></i> Add Quote to Database
            </button>
        </form>
    </div>
</div>

<h2>Add a New Quote</h2>
<?= $action_message ?>
<form method="POST">
<div class="mb-3">
  <label for="quote_text" class="form-label">Quote Text</label>
  <textarea id="quote_text" name="quote_text" class="form-control" rows="3" required></textarea>
</div>
<div class="mb-3">
  <label for="author" class="form-label">Author</label>
  <input type="text" id="author" name="author" class="form-control" required>
</div>
<button type="submit" name="add_quote" class="btn btn-custom">Add Quote</button>
</form>

<hr>

<h2>Existing Quotes</h2>
<table class="table table-bordered table-striped mt-3">
<thead>
<tr>
<th>ID</th>
<th>Quote</th>
<th>Author</th>
<th>Date Added</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($quotes as $q): ?>
<tr>
<td><?= $q['id'] ?></td>
<td><?= htmlspecialchars($q['quote_text']) ?></td>
<td><?= htmlspecialchars($q['author']) ?></td>
<td><?= $q['date_added'] ?></td>
<td>
  <!-- Edit Trigger -->
  <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $q['id'] ?>">Edit</button>
  <a href="?delete=<?= $q['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?= $q['id'] ?>" tabindex="-1" aria-labelledby="editLabel<?= $q['id'] ?>" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="editLabel<?= $q['id'] ?>">Edit Quote</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form method="POST">
<div class="modal-body">
<input type="hidden" name="quote_id" value="<?= $q['id'] ?>">
<div class="mb-3">
  <label class="form-label">Quote Text</label>
  <textarea name="quote_text" class="form-control" rows="3" required><?= htmlspecialchars($q['quote_text']) ?></textarea>
</div>
<div class="mb-3">
  <label class="form-label">Author</label>
  <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($q['author']) ?>" required>
</div>
</div>
<div class="modal-footer">
<button type="submit" name="edit_quote" class="btn btn-custom">Save Changes</button>
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
function findQuote() {
    // Show loading animation
    document.getElementById('loadingSpinner').style.display = 'block';
    document.getElementById('foundQuoteDisplay').style.display = 'none';
    
    // Fetch new quote
    fetch('?action=get_new_quote')
        .then(response => response.json())
        .then(data => {
            // Hide loading animation
            document.getElementById('loadingSpinner').style.display = 'none';
            
            if (data.status === 'success') {
                // Display the found quote
                document.getElementById('foundQuoteText').innerHTML = '"' + data.quote.text + '"';
                document.getElementById('foundQuoteAuthor').innerHTML = '- ' + data.quote.author;
                
                // Set hidden form values
                document.getElementById('hiddenQuoteText').value = data.quote.text;
                document.getElementById('hiddenAuthor').value = data.quote.author;
                
                // Show the found quote display
                document.getElementById('foundQuoteDisplay').style.display = 'block';
            } else {
                alert('Failed to fetch quote. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('loadingSpinner').style.display = 'none';
            alert('Error fetching quote. Please try again.');
        });
}
</script>
</body>
</html>