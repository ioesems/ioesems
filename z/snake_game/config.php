<?php
// config.php - Database configuration
$host = 'localhost:8081';
$dbname = 'snake_game';  // Database name defined here
$username = 'root';      // Change as per your setup
$password = '';          // Change as per your setup

try {
    // Use $dbname variable instead of $snake_game
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

session_start();
?>