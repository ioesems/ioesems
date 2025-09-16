<?php
session_start();
include __DIR__ . '/../../login/config.php';

// Check authentication
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: ../../login/index.php');
    exit;
}

// Fetch existing comments — NOW INCLUDING user_id
$comments = [];
$sql = "SELECT id, user_id, username, comment_text, created_at FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}
$conn->close();
?>

<?php include __DIR__ . '/../../head-foot/header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .comment-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .comment-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }
        textarea {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: vertical;
            min-height: 100px;
            font-size: 16px;
        }
        button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        button:hover {
            background: #45a049;
        }
        .comment {
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            position: relative;
        }
        .comment:last-child {
            border-bottom: none;
        }
        .comment-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 8px;
            flex-wrap: wrap;
            gap: 8px;
        }
        .username {
            font-weight: bold;
            color: #333;
            font-size: 16px;
        }
        .comment-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
        }
        .timestamp {
            color: #777;
        }
        .comment-actions {
            display: flex;
            gap: 6px;
        }
        .btn-edit, .btn-delete {
            padding: 4px 8px;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-edit {
            background: #2196F3;
            color: white;
        }
        .btn-edit:hover {
            background: #1976D2;
        }
        .btn-delete {
            background: #f44336;
            color: white;
        }
        .btn-delete:hover {
            background: #d32f2f;
        }
        .comment-text {
            line-height: 1.5;
            color: #555;
            margin-bottom: 10px;
            word-break: break-word;
        }
        .edit-form {
            display: none;
            margin-top: 15px;
            width: 100%;
        }
        .edit-form textarea {
            width: 100%;
            min-height: 80px;
            margin-bottom: 8px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .edit-form .buttons {
            display: flex;
            gap: 8px;
        }
        .btn-cancel {
            background: #9e9e9e;
            color: white;
            padding: 8px 16px;
        }
        .btn-cancel:hover {
            background: #757575;
        }
        .save-btn {
            background: #4CAF50;
            color: white;
            padding: 8px 16px;
        }
        .error {
            color: #e74c3c;
            background: #fadbd8;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .success {
            color: #27ae60;
            background: #d5f5e3;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        @media (max-width: 600px) {
            .comment-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .comment-actions {
                width: 100%;
                justify-content: flex-start;
            }
            .btn-edit, .btn-delete {
                flex: 1;
                text-align: center;
            }
        }
    </style>
</head>
<body>


    <div class="comment-container">
        <h1>Discussion</h1>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="success"><?php echo htmlspecialchars($_GET['success']); ?></div>
        <?php endif; ?>

        <form class="comment-form" action="save_comment.php" method="post">
            <textarea name="comment_text" id="commentText" placeholder="Write your comment..." required></textarea>
            <button type="submit">Post Comment</button>
        </form>

        <div class="comments-list">
            <?php if (empty($comments)): ?>
                <p>No comments yet. Be the first to comment!</p>
            <?php else: ?>
                <?php foreach ($comments as $comment): ?>
                    <div class="comment" data-comment-id="<?php echo $comment['id']; ?>">
                        <div class="comment-header">
                            <span class="username"><?php echo htmlspecialchars($comment['username']); ?></span>
                            <div class="comment-meta">
                                <span class="timestamp"><?php echo date('M d, Y H:i', strtotime($comment['created_at'])); ?></span>

                                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === $comment['user_id']): ?>
                                    <div class="comment-actions">
                                        <button class="btn-edit" onclick="toggleEdit(<?php echo $comment['id']; ?>)" title="Edit comment">✏️</button>
                                        <button class="btn-delete" onclick="confirmDelete(<?php echo $comment['id']; ?>)" title="Delete comment">🗑️</button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="comment-text" id="text-<?php echo $comment['id']; ?>">
                            <?php echo nl2br(htmlspecialchars($comment['comment_text'])); ?>
                        </div>

                        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === $comment['user_id']): ?>
                            <form class="edit-form" id="edit-form-<?php echo $comment['id']; ?>" action="edit_comment.php" method="post">
                                <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                                <textarea name="comment_text" required><?php echo htmlspecialchars($comment['comment_text']); ?></textarea>
                                <div class="buttons">
                                    <button type="submit" class="save-btn">Save Changes</button>
                                    <button type="button" class="btn-cancel" onclick="toggleEdit(<?php echo $comment['id']; ?>)">Cancel</button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // Auto-focus only if element exists
        const commentTextarea = document.getElementById('commentText');
        if (commentTextarea) {
            commentTextarea.focus();
        }

        function toggleEdit(commentId) {
            const form = document.getElementById('edit-form-' + commentId);
            const text = document.getElementById('text-' + commentId);
            if (form && text) {
                if (form.style.display === 'block') {
                    form.style.display = 'none';
                    text.style.display = 'block';
                } else {
                    form.style.display = 'block';
                    text.style.display = 'none';
                }
            }
        }

        function confirmDelete(commentId) {
            if (confirm('⚠️ Are you sure you want to delete this comment? This cannot be undone.')) {
                window.location.href = 'delete_comment.php?id=' + commentId;
            }
        }
    </script>
</body>
</html>


