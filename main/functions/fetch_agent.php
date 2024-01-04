<?php
// Start a session to store user information
session_start();
// Set the session variable 'username' to the session ID
$_SESSION['username'] = session_id();
// Set the session variable 'device' to the user's device information
$_SESSION['device'] = $Device;
// Get the user agent string from the HTTP headers
$user = $_SERVER["HTTP_USER_AGENT"];
// Initialize the $Device variable to store device information
$Device;

// Loop through the user agent string to extract device information
for ($i = 0; $i < strlen($user); $i++) {
    // Break the loop if a semicolon is encountered
    if ($user[$i] == ';') break;

    // Start capturing device information when an opening parenthesis is encountered
    if ($user[$i] == '(') {
        $flag = true;
        continue;
    }

    // Capture device information if the flag is true
    if ($flag) {
        $Device = $Device . $user[$i];
    }
}
