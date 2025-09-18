<?php
// Database connection settings
$host = 'localhost:8081'; // ← Removed port 8081 — MySQL usually runs on 3306
$dbname = 'ioesems';
$username = 'root';
$password = '';

// Initialize variables
$title = '';
$content = '';
$note_id = null;
$error = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If editing, fetch existing note
    if (isset($_GET['id'])) {
        $note_id = (int)$_GET['id'];
        $stmt = $pdo->prepare("SELECT title, content FROM notes WHERE id = ?");
        $stmt->execute([$note_id]);
        $note = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($note) {
            $title = $note['title'];
            $content = $note['content'];
        } else {
            $error = "Note not found.";
        }
    }

    // Handle form submission
    if ($_POST) {
        $title = trim($_POST['title']);
        $content = trim($_POST['content']);

        if (empty($title) || empty($content)) {
            $error = "Title and content are required.";
        } else {
            if ($note_id) {
                // Update existing note
                $stmt = $pdo->prepare("UPDATE notes SET title = ?, content = ? WHERE id = ?");
                $stmt->execute([$title, $content, $note_id]);
            } else {
                // Insert new note
                $stmt = $pdo->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
                $stmt->execute([$title, $content]);
            }
            // Redirect to index after save
            header("Location: index.php");
            exit;
        }
    }

} catch (PDOException $e) {
    $error = "Database connection failed. Please try again later.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $note_id ? 'Edit Note' : 'Create Note'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --danger: #f72585;
            --success: #4cc9f0;
            --light-bg: #f8f9fa;
            --card-bg: #ffffff;
            --text: #212529;
            --border: #dee2e6;
            --shadow: 0 4px 12px rgba(0,0,0,0.08);
            --transition: all 0.25s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--light-bg);
            color: var(--text);
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--card-bg);
            padding: 40px;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 50px;
            transition: var(--transition);
        }

        .back-link:hover {
            background: rgba(67, 97, 238, 0.1);
        }

        h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 10px;
        }

        .subtitle {
            color: #6c757d;
            font-size: 1rem;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text);
            font-size: 1.1rem;
        }

        input, textarea {
            width: 100%;
            padding: 14px;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-size: 1rem;
            transition: var(--transition);
            font-family: inherit;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        textarea {
            min-height: 200px;
            resize: vertical;
            line-height: 1.6;
        }

        .btn-submit {
            padding: 14px 32px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: var(--shadow);
        }

        .btn-submit:hover {
            background: #3a56d4;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(67, 97, 238, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .error {
            background: #ffe5e5;
            color: var(--danger);
            padding: 14px;
            border-radius: 12px;
            margin-bottom: 24px;
            border-left: 4px solid var(--danger);
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
        }

        .error i {
            font-size: 1.2rem;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body { padding: 15px; }
            .container { padding: 25px; border-radius: 16px; }
            h1 { font-size: 1.5rem; }
            input, textarea { padding: 12px; }
            .btn-submit { padding: 12px 24px; font-size: 1rem; }
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="header">
            <a href="index.php" class="back-link">
                <i class="fas fa-arrow-left"></i> Back to Notes
            </a>
        </div>

        <h1><i class="fas fa-<?php echo $note_id ? 'edit' : 'plus'; ?>"></i> <?php echo $note_id ? 'Edit Note' : 'Create New Note'; ?></h1>
        <p class="subtitle">Manage your thoughts, ideas, and reminders in one place.</p>

        <?php if (!empty($error)): ?>
            <div class="error">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="title"><i class="fas fa-heading"></i> Note Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="<?php echo htmlspecialchars($title); ?>" 
                    placeholder="Enter a meaningful title..."
                    required
                    autofocus>
            </div>

            <div class="form-group">
                <label for="content"><i class="fas fa-align-left"></i> Note Content</label>
                <textarea 
                    id="content" 
                    name="content" 
                    placeholder="Write your note here..." 
                    required><?php echo htmlspecialchars($content); ?></textarea>
            </div>

            <button type="submit" class="btn-submit">
                <i class="fas fa-save"></i>
                <?php echo $note_id ? 'Save Changes' : 'Create Note'; ?>
            </button>
        </form>

    </div>

</body>
</html>