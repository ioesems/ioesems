<?php
// api/login.php

session_start();
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$firebaseVerifyUrl = "https://identitytoolkit.googleapis.com/v1/accounts:lookup?key=AIzaSyDyCmJH8PoT3eTtRS52nZ5fyrofwIymMUk";

$data = json_decode(file_get_contents("php://input"), true);
$idToken = $data['idToken'] ?? null;

if (!$idToken) {
    http_response_code(400);
    echo json_encode(["error" => "ID token is required"]);
    exit;
}

try {
    $ch = curl_init($firebaseVerifyUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(["idToken" => $idToken]));

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    if (isset($result['users'][0])) {
        $user = $result['users'][0];
        $userId = $user['localId'];
        $name = $user['displayName'] ?? 'Anonymous User';
        $email = $user['email'] ?? '';

        // Store in session — now we know they are logged in
        $_SESSION['user_id'] = $userId;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['user_logged_in'] = true;

        echo json_encode([
            "name" => $name,
            "email" => $email,
            "status" => "success"
        ]);
    } else {
        http_response_code(401);
        echo json_encode(["error" => "Invalid or expired token"]);
    }

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => "Server error", "details" => $e->getMessage()]);
}
?>