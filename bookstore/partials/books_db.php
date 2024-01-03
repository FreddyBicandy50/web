<?php

$connect = db("test");
if (!$connect) die("error Connecting to Database error code:" . mysqli_connect_error());
else $result = mysqli_query($connect, "SELECT * FROM Books;");
