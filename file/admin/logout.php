<?php

// define('ROOT_PATH', '/std/'); // Assuming the 'std' folder is directly under 'htdocs'

session_start(); // Start the session

// Destroy all session data
session_unset(); // Unset all session variables
 $_SESSION['admin_logged_in'] = false;
session_destroy(); // Destroy the session

// Redirect to the login page or any other page
header("Location: ../../index.php");
exit;
?>
