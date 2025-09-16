<?php
session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../components/login/index.php");
    exit();
}

include 'user_interface.php';
?>