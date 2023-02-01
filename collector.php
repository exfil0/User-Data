<?php

$file = 'visitor_data.txt';

// Get visitor's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get visitor's cookies
$cookies = print_r($_COOKIE, true);

// Write visitor data to file
file_put_contents($file, "IP Address: $ip\nCookies: $cookies\n\n", FILE_APPEND);

?>
