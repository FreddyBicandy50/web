<?php

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
