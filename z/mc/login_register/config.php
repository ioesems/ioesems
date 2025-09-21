<?php
// config.php - Database Configuration

$host = 'localhost:8081';
$dbname = 'mcq_test_db';
$username = 'root';      // Change if needed
$password = '';          // Change if needed

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>