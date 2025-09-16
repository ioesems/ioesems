<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Manager</title>
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
            --shadow: 0 4px 6px rgba(0,0,0,0.1);
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
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--border);
        }

        h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }

        .add-link-btn {
            padding: 12px 24px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: var(--shadow);
        }

        .add-link-btn:hover {
            background: #3a56d4;
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(67, 97, 238, 0.3);
        }

        .search-form {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            flex-wrap: wrap;
            align-items: center;
        }

        .search-box {
            flex: 1;
            min-width: 250px;
            padding: 12px 16px;
            border: 2px solid var(--border);
            border-radius: 50px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .search-box:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        .search-btn {
            padding: 12px 24px;
            background: #6c757d;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .search-btn:hover {
            background: #5a6268;
        }

        .link-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .link-block {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 24px;
            box-shadow: var(--shadow);
            position: relative;
            transition: var(--transition);
            border: 1px solid var(--border);
        }

        .link-block:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .action-buttons {
            position: absolute;
            top: 16px;
            right: 16px;
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 36px;
            height: 36px;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
            transition: var(--transition);
            color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .edit-btn { background: #2a9d8f; }
        .edit-btn:hover { background: #218274; transform: scale(1.1); }

        .delete-btn { background: var(--danger); }
        .delete-btn:hover { background: #e01a6e; transform: scale(1.1); }

        .open-btn { background: var(--success); }
        .open-btn:hover { background: #3ab7d1; transform: scale(1.1); }

        .link-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--text);
            word-break: break-word;
        }

        .link-url {
            font-size: 0.95rem;
            color: #007BFF;
            word-break: break-all;
            text-decoration: underline;
            line-height: 1.5;
            display: block;
            margin-top: 8px;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
            grid-column: 1 / -1;
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 16px;
            color: #adb5bd;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body { padding: 15px; }
            h1 { font-size: 1.5rem; }
            .link-container { grid-template-columns: 1fr; }
            .link-block { padding: 20px; }
            .action-btn { width: 32px; height: 32px; font-size: 12px; }
            .search-form { flex-direction: column; }
            .search-box { min-width: auto; width: 100%; }
        }

        /* Toast notification (optional for future) */
        .toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            font-size: 14px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.4s ease;
            pointer-events: none;
            z-index: 1000;
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <div class="container">

        <header>
            <h1><i class="fas fa-link"></i> My Links</h1>
            <a href="create_and_upload_link.php" class="add-link-btn">
                <i class="fas fa-plus"></i> Add Link
            </a>
        </header>

        <form method="GET" action="" class="search-form">
            <input type="text" name="search" class="search-box" placeholder="Search links by title..." 
                   value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
                   aria-label="Search links">
            <button type="submit" class="search-btn">
                <i class="fas fa-search"></i> Search
            </button>
        </form>

        <div class="link-container">
            <?php
            // Database connection
            $host = 'localhost:8081';
            $dbname = 'ioesems';
            $username = 'root';
            $password = '';

            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Build query with optional search
                $sql = "SELECT id, title, content FROM links";
                $params = [];

                if (!empty($_GET['search'])) {
                    $sql .= " WHERE title LIKE ?";
                    $params[] = '%' . $_GET['search'] . '%';
                }

                $sql .= " ORDER BY created_at DESC";

                $stmt = $pdo->prepare($sql);
                $stmt->execute($params);
                $links = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($links) > 0) {
                    foreach ($links as $link) {
                        echo '<div class="link-block">';
                        echo '<div class="action-buttons">';
                        echo '<button class="action-btn edit-btn" title="Edit" onclick="window.location.href=\'create_and_upload_link.php?id=' . $link['id'] . '\'">';
                        echo '<i class="fas fa-pen"></i></button>';
                        echo '<button class="action-btn delete-btn" title="Delete" onclick="deleteLink(' . $link['id'] . ')">';
                        echo '<i class="fas fa-trash"></i></button>';
                        echo '<button class="action-btn open-btn" title="Open" onclick="openLink(\'' . addslashes($link['content']) . '\')">';
                        echo '<i class="fas fa-external-link-alt"></i></button>';
                        echo '</div>';
                        echo '<div class="link-title">' . htmlspecialchars($link['title']) . '</div>';
                        echo '<a href="' . htmlspecialchars($link['content']) . '" target="_blank" class="link-url">';
                        echo htmlspecialchars($link['content']);
                        echo '</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="empty-state">';
                    echo '<i class="fas fa-link-slash"></i>';
                    echo '<h3>No links found</h3>';
                    echo '<p>Try changing your search or add a new link.</p>';
                    echo '</div>';
                }

                // Handle delete without confirmation
                if (isset($_GET['delete_id'])) {
                    $delete_id = (int)$_GET['delete_id'];
                    $stmt = $pdo->prepare("DELETE FROM links WHERE id = ?");
                    $stmt->execute([$delete_id]);
                    header("Location: index.php" . (!empty($_GET['search']) ? "?search=" . urlencode($_GET['search']) : ""));
                    exit;
                }

            } catch (PDOException $e) {
                echo '<div class="empty-state" style="color: var(--danger);">';
                echo '<i class="fas fa-exclamation-triangle"></i>';
                echo '<h3>Database Error</h3>';
                echo '<p>Failed to load links. Please check your connection.</p>';
                echo '</div>';
            }
            ?>
        </div>

    </div>

    <script>
        function openLink(url) {
            // Ensure URL has protocol
            if (!url.startsWith('http://') && !url.startsWith('https://')) {
                url = 'https://' + url;
            }
            window.open(url, '_blank');
        }

        function deleteLink(id) {
            window.location.href = '?delete_id=' + id;
        }
    </script>

</body>
</html>