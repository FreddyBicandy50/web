<?php

$db = new Database('test', true, $server_private);
$connection = $db->connect();
// Check if the connection to the database is successful

if (!$connection)
    // Display an error message and terminate script execution if connection fails
    die("Error connecting to the database: " . mysqli_connect_error());
else {
    if (URL($notes_main)) {
        $query = "SELECT notes.id as note_id , notes.note as content , notes.`date` , notes.due ,users.id as user_id, users.name,users.email,users.image
FROM notes
JOIN users ON notes.user_id = users.id";
    } else if (URL($notes_description . $request) || URL($notes_description . '/' . $request)) {
            $id = explode("=", $request);
            $id = $id[1]; 
        $query = "SELECT notes.note as title , notes.Description as content ,notes.due as due
FROM notes
JOIN users ON notes.user_id = users.id
WHERE  notes.id=$id";
    }

    $result = $db->query($connection, $query);
}

