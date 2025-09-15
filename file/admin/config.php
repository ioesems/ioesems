<?php

$servername = "localhost:8081"; // Your database server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "ioesems"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
