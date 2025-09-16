<?php
// api/logout.php — Securely destroy session

session_start();

// Clear all session data
$_SESSION = [];

// Destroy session file
session_destroy();

// Clear cookies
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

header('Content-Type: application/json');
echo json_encode([
    "status" => "success",
    "message" => "Logged out successfully"
]);