<?php


// Get the session username
$id = $_SESSION['username'];
// Check if the current HTTP host matches the local or private server
if (HTTP($server_local) || HTTP($server_private))
    // Connect to the 'test' database
    $connection=$db->connect('test',true);
else
    // Connect to the 'if0_35693876_dateme' database
    $connection=$db->connect('if0_35693876_bookstore',false);


// Check if the database connection was successful
if (!$connection) {
    // Display an error message if there is an issue connecting to the database
    die("error Connecting to Database error code:" . mysqli_connect_error());
} else {
    // Get the current time and date
    $time = date("h:i:sa");
    $getdate = date('Y/m/d');
    // Insert data into the 'dateme' table
    
    $query="INSERT INTO dateme (Session_id, Device_name, yes, no_avoid, date_entry, time_entry)
    VALUES ('$id', '$Device', $yesCount, $noCount, '$getdate', '$time');";
    $db->query($connection,$query);
}
