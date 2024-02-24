<?php

require('.main/database/connect.php'); //connection class
$database = connection('test'); //connect to database 'dbname'

// Check if the connection to the database is successful
if (!$_SESSION['connection'] = $database->connect()) {
    // Display an error message and terminate script execution if connection fails
    die("Error connecting to the database: " . mysqli_connect_error());
}
