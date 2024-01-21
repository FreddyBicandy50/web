<?php

// Get the session username
$id = $_SESSION['username'];
// Check if the current HTTP host matches the local or private server
if (HTTP($server_local[0]) || HTTP($server_local[1]) || HTTP($server_private[0]) || HTTP($server_private[1])) {
    if (HTTP($server_local[0]) || HTTP($server_private[0])) {
        $db = new Database('test', true, $server_private[0]);
    } else {
        $db = new Database('test', true, $server_private[1]);
    }
    // Connect to the 'test' database
    $connection = $db->connect();
} else {
    $db = new Database('if0_35693876_dateme', false, "");
    // Connect to the 'if0_35693876_bookstore' database
    $connection = $db->connect();
}