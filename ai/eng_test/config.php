<?php 
// Database configuration
$host = 'localhost:8081';
$dbname = 'eng_proficiency';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Session configuration
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['user_id']) && basename($_SERVER['PHP_SELF']) !== 'login.php' && 
    basename($_SERVER['PHP_SELF']) !== 'register.php') {
    header('Location: login.php');
    exit;
}
?>
