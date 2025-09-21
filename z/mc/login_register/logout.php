<?php
session_start();
session_destroy();
header("Location: login.php?msg=" . urlencode("You have been logged out.") . "&type=success");
exit();
?>