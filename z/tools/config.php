<?php
// config.php — Shared database connection for entire app

// Database credentials
define('DB_HOST', 'localhost:8081');
define('DB_NAME', 'ioesems');
define('DB_USER', 'root');
define('DB_PASS', '');

// Optional: Set timezone
date_default_timezone_set('Asia/Kolkata'); // Change as needed

// PDO Connection Function
function getDB() {
    static $pdo = null;

    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            // For production, log error and show user-friendly message
            error_log("Database Connection Error: " . $e->getMessage());
            throw new Exception("Database unavailable. Please try again later.");
        }
    }

    return $pdo;
}

// Optional: Helper to safely output errors during development
function showDBError($e) {
    // For development only — comment out or remove in production
    return "🚨 DATABASE ERROR:<br><strong>" . htmlspecialchars($e->getMessage()) . "</strong><br><br>
            💡 Check: host, dbname, username, password, MySQL service.";
    // For production, use:
    // return "Failed to load data. Please try again later.";
}