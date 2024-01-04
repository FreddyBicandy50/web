<?php
$id=$_SESSION['username'];
    
$connect=db("test");
if (!$connect) die(("error Connecting to Database error code:" . mysqli_connect_error()));
else $result = mysqli_query($connect, "INSERT INTO dateme (Session_id, Device_name,yes,no_avoid)
VALUES ($id, $Device, $no,$yes);");

?>