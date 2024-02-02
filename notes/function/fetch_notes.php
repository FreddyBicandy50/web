<?php

$db = new Database('test', true, '192.168.0.109');
$connection = $db->connect();
// Check if the connection to the database is successful
if (!$connection)
    // Display an error message and terminate script execution if connection fails
    die("Error connecting to the database: " . mysqli_connect_error());
else {
    $query = "SELECT * FROM notes JOIN users ON user_id;";
    $result = $db->query($connection, $query);
}
