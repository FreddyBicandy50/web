<?php
require('main/database/connect.php');
require("main/database/fetch.php");
$db = connection('Cars_num');

$connection = $db->connect();
if (!$connection) die("error connecting to database" . mysqli_connect_error());

