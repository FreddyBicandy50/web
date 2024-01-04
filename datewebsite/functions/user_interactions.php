<?php


// Get the session username
$id = $_SESSION['username'];
// Check if the current HTTP host matches the local or private server
if (HTTP($server_local) || HTTP($server_private))
    // Connect to the 'test' database
    $connect = db('test', true);
else
    // Connect to the 'if0_35693876_dateme' database
    $connect = db('if0_35693876_dateme', false);




// Check if the database connection was successful
if (!$connect) {
    // Display an error message if there is an issue connecting to the database
    die("error Connecting to Database error code:" . mysqli_connect_error());
} else {
    // Get the current time and date
    $time = date("h:i:sa");
    $getdate = date('Y/m/d');

    // Insert data into the 'dateme' table
    mysqli_query(
        $connect,
        "INSERT INTO dateme (Session_id, Device_name, yes, no_avoid, date_entry, time_entry)
        VALUES ('$id', '$Device', $noCount, $yesCount, '$getdate', '$time');"
    );

}
