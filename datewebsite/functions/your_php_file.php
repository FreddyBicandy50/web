<?php
// your_php_file.php

if (isset($_GET['yes']) && isset($_GET['no'])) {
    $yesCount =$_GET['yes'];
    $noCount = $_GET['no'];

    // Do something with the values, for example, save them to a database
    // You can use $yesCount and $noCount as needed
    echo "Yes Count: $yesCount, No Count: $noCount";

}

?>