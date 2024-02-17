<?php

require('.main/database/connect.php');
$database = connection('test');
$connect = $database->connect();
// Check if the connection to the database is successful
if (!$connect) {
    // Display an error message and terminate script execution if connection fails
    die("Error connecting to the database: " . mysqli_connect_error());
}
