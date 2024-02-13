<?php
require('main/database/connect.php');
require("main/database/fetch.php");
$db = connection('Cars_num');

$connection = $db->connect();
if (!$connection) echo "error connecting to database" . mysqli_connect_error();
else {
        if(empty($_GET['request'])) echo "no query";
        else{
        $query = "SELECT * from cars_NB WHERE ActualNB='$request[0]'";
           $result = $db->query($connection, $query);
        }
}

