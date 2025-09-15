<?php
// api/config.php

$servername = "localhost:8081";
$username = "root";
$password = "";
$database = "ioesems";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}