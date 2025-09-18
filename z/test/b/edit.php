<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Handle form submission for editing test
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $testId = intval($_POST['test_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $text = trim($_POST['text'] ?? '');
    
    // Validate inputs
    if (empty($title) || empty($text)) {
        $_SESSION['error'] = 'Title and text are required';
        header('Location: user_interface.php');
        exit;
    }
    
    // Update the test in database
    $stmt = $pdo->prepare("UPDATE test_results SET title = ?, original_text = ? 
                          WHERE id = ? AND user_id = ?");
    $result = $stmt->execute([$title, $text, $testId, $_SESSION['user_id']]);
    
    if ($result) {
        $_SESSION['success'] = 'Test updated successfully';
    } else {
        $_SESSION['error'] = 'Failed to update test';
    }
    
    header('Location: user_interface.php');
    exit;
}

// Handle delete request
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $testId = intval($_GET['id']);
    
    $stmt = $pdo->prepare("DELETE FROM test_results WHERE id = ? AND user_id = ?");
    $result = $stmt->execute([$testId, $_SESSION['user_id']]);
    
    if ($result) {
        $_SESSION['success'] = 'Test deleted successfully';
    } else {
        $_SESSION['error'] = 'Failed to delete test';
    }
    
    header('Location: user_interface.php');
    exit;
}

// Get test details for editing
if (isset($_GET['test_id'])) {
    $testId = intval($_GET['test_id']);
    
    $stmt = $pdo->prepare("SELECT * FROM test_results WHERE id = ? AND user_id = ?");
    $stmt->execute([$testId, $_SESSION['user_id']]);
    $test = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$test) {
        $_SESSION['error'] = 'Test not found';
        header('Location: user_interface.php');
        exit;
    }
} else {
    $_SESSION['error'] = 'Invalid test ID';
    header('Location: user_interface.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Test - English Proficiency Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e7f2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        header {
            background: #4a6fa5;
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo i {
            font-size: 1.8rem;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #166088;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        main {
            flex: 1;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }
        
        .edit-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .edit-container h2 {
            margin-bottom: 1.5rem;
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .edit-container h2 i {
            color: #4a6fa5;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #333;
        }
        
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-group input:focus, .form-group textarea:focus {
            border-color: #4a6fa5;
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 111, 165, 0.2);
        }
        
        .form-group textarea {
            min-height: 200px;
            resize: vertical;
        }
        
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary {
            background: #4a6fa5;
            color: white;
        }
        
        .btn-primary:hover {
            background: #3a5a80;
        }
        
        .btn-secondary {
            background: #e0e0e0;
            color: #333;
        }
        
        .btn-secondary:hover {
            background: #d0d0d0;
        }
        
        .btn-danger {
            background: #e74c3c;
            color: white;
        }
        
        .btn-danger:hover {
            background: #c0392b;
        }
        
        .success {
            color: #2ecc71;
            background: #e6fff2;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: left;
            display: <?php echo isset($_SESSION['success']) ? 'block' : 'none'; ?>;
        }
        
        .error {
            color: #e74c3c;
            background: #ffebee;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: left;
            display: <?php echo isset($_SESSION['error']) ? 'block' : 'none'; ?>;
        }
        
        .back-link {
            display: inline-block;
            margin-top: 1rem;
            color: #4a6fa5;
            text-decoration: none;
            font-weight: 500;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .btn-group {
                flex-direction: column;
            }
            
            .edit-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <span>English Proficiency Test</span>
        </div>
        <div class="user-info">
            <div class="avatar"><?php echo substr($_SESSION['username'], 0, 1); ?></div>
            <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <a href="logout.php" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </header>
    
    <main>
        <div class="edit-container">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="success"><?php echo htmlspecialchars($_SESSION['success']); ?></div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['error'])): ?>
                <div class="error"><?php echo htmlspecialchars($_SESSION['error']); ?></div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>
            
            <h2><i class="fas fa-edit"></i> Edit Test</h2>
            
            <form method="POST" action="edit.php">
                <input type="hidden" name="test_id" value="<?php echo $test['id']; ?>">
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($test['title']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="text">Your Text</label>
                    <textarea id="text" name="text" required><?php echo htmlspecialchars($test['original_text']); ?></textarea>
                </div>
                
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save Changes
                    </button>
                    <a href="user_interface.php" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                    <a href="edit.php?action=delete&id=<?php echo $test['id']; ?>" 
                       class="btn btn-danger" 
                       onclick="return confirm('Are you sure you want to delete this test? This cannot be undone.')">
                        <i class="fas fa-trash"></i> Delete Test
                    </a>
                </div>
            </form>
            
            <a href="user_interface.php" class="back-link">
                <i class="fas fa-arrow-left"></i> Back to Tests
            </a>
        </div>
    </main>
</body>
</html>