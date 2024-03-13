<?php
require('datewebsite/database/connection.php');


$connection = $db->connect();
// Check if the database connection was successful
if (!$connection) {
    // Display an error message if there is an issue connecting to the database
    die("error Connecting to Database error code:" . mysqli_connect_error());
} else {
    
    // Get the current time and date
    $time = date("h:i:sa");
    $getdate = date('Y/m/d');

    // Insert data into the 'dateme' table
    $query = "INSERT INTO dateme (Session_id, Device_name, yes, no_avoid, date_entry, time_entry)
    VALUES ('$id', '$Device', $yesCount, $noCount, '$getdate', '$time');";
    $db->query($connection, $query);
}
