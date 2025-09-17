<?php
// login.php
// Receives { "idToken": "...", "returnTo": "/path" } via POST JSON from the client (fetch).
// Verifies with Firebase REST API (accounts:lookup), creates a secure session, and returns JSON
declare(strict_types=1);

// --- Configuration ---
$FIREBASE_API_KEY = 'AIzaSyDyCmJH8PoT3eTtRS52nZ5fyrofwIymMUk';
$FIREBASE_VERIFY_URL = "https://identitytoolkit.googleapis.com/v1/accounts:lookup?key={$FIREBASE_API_KEY}";
$REDIRECT_AFTER_LOGIN = '/std/';

// Set JSON header
header('Content-Type: application/json; charset=utf-8');

// --- Secure session cookie params (set before session_start) ---
$secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',       // default
    'secure' => $secure,  // send cookie only over HTTPS when available
    'httponly' => true,   // not accessible to JS
    'samesite' => 'Lax'   // reasonable default
]);
session_start();

// --- small helper: validate safe internal redirect paths ---
// Accept only origin-relative internal paths that start with '/' and do not contain protocol or traversal.
function is_safe_internal_path($candidate): bool {
    if (!is_string($candidate)) return false;
    $candidate = trim($candidate);
    if ($candidate === '') return false;
    if ($candidate[0] !== '/') return false;                // must start with '/'
    if (strpos($candidate, "\0") !== false) return false;    // no null bytes
    if (substr($candidate, 0, 2) === '//') return false;    // disallow protocol-relative URLs
    if (stripos($candidate, 'http://') !== false) return false;
    if (stripos($candidate, 'https://') !== false) return false;
    if (strpos($candidate, '..') !== false) return false;    // no path traversal
    // allow query string and hash (#) after path
    return true;
}

// --- Read and validate JSON body ---
$raw = file_get_contents('php://input');
if ($raw === false || trim($raw) === '') {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'error' => 'Empty request body']);
    exit;
}

$data = json_decode($raw, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'error' => 'Invalid JSON', 'json_error' => json_last_error_msg()]);
    exit;
}

$idToken = $data['idToken'] ?? null;
if (empty($idToken) || !is_string($idToken)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'error' => 'ID token is required']);
    exit;
}

// Optional: quick sanity check on token length
if (strlen($idToken) < 20) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'error' => 'ID token appears invalid (too short)']);
    exit;
}

// --- Call Firebase REST API to verify token ---
$payload = json_encode(['idToken' => $idToken]);

$ch = curl_init($FIREBASE_VERIFY_URL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$curlErrNo = curl_errno($ch);
$curlErr = curl_error($ch);
$httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE) ?: 0;
curl_close($ch);

if ($response === false || $curlErrNo !== 0) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'error' => 'Failed to contact Firebase',
        'curl_error_no' => $curlErrNo,
        'curl_error' => $curlErr
    ]);
    exit;
}

$result = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(502);
    echo json_encode(['status' => 'error', 'error' => 'Invalid response from Firebase', 'raw_response' => $response]);
    exit;
}

// Handle Firebase API error payload (if any)
if (isset($result['error'])) {
    $firebaseMsg = $result['error']['message'] ?? 'Unknown Firebase error';
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'error' => 'Firebase error: ' . $firebaseMsg,
        'firebase_error' => $firebaseMsg
    ]);
    exit;
}

// Expect a successful response containing 'users' array
if (!isset($result['users'][0]) || !is_array($result['users'][0])) {
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'error' => 'Token verification failed (no user returned)',
        'firebase_response' => $result
    ]);
    exit;
}

$user = $result['users'][0];

// Extract fields safely
$userId = $user['localId'] ?? null;
$name = $user['displayName'] ?? null;
$email = $user['email'] ?? null;
$picture = $user['photoUrl'] ?? null;

if (!$userId) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'error' => 'Verified user missing localId', 'firebase_user' => $user]);
    exit;
}

// --- Create / secure session server-side ---
session_regenerate_id(true);

$_SESSION['user_id'] = $userId;
$_SESSION['name'] = $name ?? 'User';
$_SESSION['email'] = $email ?? '';
$_SESSION['picture'] = $picture ?? '';
$_SESSION['user_logged_in'] = true;

// --- Determine safe redirect target ---
// Priority: client-provided $data['returnTo'] -> session $_SESSION['login_return_to'] -> default
$redirect = $REDIRECT_AFTER_LOGIN;
$clientReturn = $data['returnTo'] ?? null;
$sessionReturn = $_SESSION['login_return_to'] ?? null;

if (is_safe_internal_path($clientReturn)) {
    $redirect = $clientReturn;
} elseif (is_safe_internal_path($sessionReturn)) {
    $redirect = $sessionReturn;
}

// Clear stored session return so it cannot be reused
if (isset($_SESSION['login_return_to'])) {
    unset($_SESSION['login_return_to']);
}

// --- Return success JSON for client (index.php expects status==='success' and redirect) ---
http_response_code(200);
echo json_encode([
    'status' => 'success',
    'message' => 'Logged in successfully',
    'name' => $_SESSION['name'],
    'email' => $_SESSION['email'],
    'user_id' => $_SESSION['user_id'],
    'picture' => $_SESSION['picture'],
    'redirect' => $redirect
]);
exit;
