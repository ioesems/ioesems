<?php
$html = @file_get_contents("http://exam.ioe.edu.np/Images/NotificationsFile/");
if ($html === false) {
    echo "Could not load page";
} else {
    echo htmlentities(substr($html, 0, 2000)); // show first 2k chars
}
