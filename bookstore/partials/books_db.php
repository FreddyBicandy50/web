<?php

if ($_SERVER['HTTP_HOST'] =="kali-wsl.tail4bb6a.ts.net" || $_SERVER['HTTP_REFERER'] =='raspberrypi.tail4bb6a.ts.net')
        $connect=db('test');
else  $connect=db('if0_35693876_bookstore');

if (!$connect) die("error Connecting to Database error code:" . mysqli_connect_error());
else $result = mysqli_query($connect, "SELECT * FROM Books;");
