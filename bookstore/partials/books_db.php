<?php

$request = explode("=", $_GET['request']);
// Check if the server is local or private, and connect to the corresponding database
if (HTTP($server_local[0]) || HTTP($server_local[1]) || HTTP($server_private[0]) || HTTP($server_private[1])) {
        // Connect to the 'test' database
        if ($server_local[0]) $db = new Database('test', true, $server_private[0]);
        else $db = new Database('test', true, $server_private[1]);
        $connection = $db->connect();
} else {
        $db = new Database('if0_35693876_bookstore', false, 'void');
        // Connect to the 'if0_35693876_bookstore' database
        $connection = $db->connect();
}
if (!$connection) {
        die("error connecting to database Code:" );
}
if (URL($route_bookstore_main))
        $query = "SELECT * FROM Books WHERE 1";
else {
        $query = "SELECT * FROM Books WHERE $request[0]='$request[1]'";
}
// Query the 'Books' table and store the result in the $result variable
$result = $db->query($connection, $query);
