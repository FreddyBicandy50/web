<?php

// Get the session username
$id = $_SESSION['username'];
require('main/database/connect.php');
if(is_public($_SERVER['SERVER_NAME']))
        $db = connection('if0_35693876_dateme', $query);
else
        $db = connection('test', $query);

$connection = $db->connect();
if (!$connection) die("error connecting to database" . mysqli_connect_error());
else {

        if (URL($bookstore . $url[1]))
                $query = "SELECT * FROM Books WHERE 1";
        else {
                $query = "SELECT * FROM Books WHERE $request[0]='$request[1]'";
        }
        $result = $db->query($connection, $query);
}
