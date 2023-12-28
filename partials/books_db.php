<?php

$hostname="kali-wsl.tail4bb6a.ts.net";
$username="root";
$password="@1120338#7";
$database_name="test";

$connect=mysqli_connect($hostname,$username,$password,$database_name);


if(!$connect) die("error Connecting to Database error code:".mysqli_connect_error());
else $result = mysqli_query($connect,"SELECT * FROM Books;"); 
 