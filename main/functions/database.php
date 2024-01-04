<?php
#database 
function db($db_name)
{
    $hostname=$username=$password=$database_name=$port='';
    if ($_SERVER['HTTP_HOST'] =="kali-wsl.tail4bb6a.ts.net" || $_SERVER['HTTP_REFERER'] =='raspberrypi.tail4bb6a.ts.net') {
        $hostname = "kali-wsl.tail4bb6a.ts.net";
        $username = "root";
        $password = "@1120338#7";
        $database_name = $db_name;
        $port = '3306';
        return mysqli_connect($hostname, $username, $password, $database_name);
    } else { 
        $hostname = "sql310.infinityfree.com";
        $username = "if0_35693876";
        $password = "b1tVbXNmF9rYT";
        $database_name = $db_name;
        $port = '3306';
    }
    return mysqli_connect($hostname, $username, $password, $database_name, $port);
}
