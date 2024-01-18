<?php

$request = explode("=", $_GET['request']);
// Check if the server is local or private, and connect to the corresponding database
if (HTTP($server_local[0]) || HTTP($server_local[1]) || HTTP($server_private[0])|| HTTP($server_private[1])) {
        $db = new Database('test', true);
        // Connect to the 'test' database
        $connection = $db->connect();
} else {
        $db = new Database('if0_35693876_bookstore', false);
        // Connect to the 'if0_35693876_bookstore' database
        $connection = $db->connect();
}
// Check if the connection to the database is successful
if (!$connection)
        // Display an error message and terminate script execution if connection fails
        die("Error connecting to the database: " . mysqli_connect_error());
else {
        
        if ($_SERVER[$URI] == $route_bookstore_main)
                $query = "SELECT * FROM Books WHERE 1";
        else{ 
                $query = "SELECT * FROM Books WHERE $request[0]='$request[1]'";
        }
        // Query the 'Books' table and store the result in the $result variable
        $result = $db->query($connection, $query);
}
