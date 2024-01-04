<?php
$id=$_SESSION['username'];
if ($_SERVER['HTTP_HOST'] =="kali-wsl.tail4bb6a.ts.net" || $_SERVER['HTTP_REFERER'] =='raspberrypi.tail4bb6a.ts.net')
        $connect=db('test');
else  $connect=db('if0_35693876_dateme');

if (!$connect) echo("error Connecting to Database error code:");
else {
    $time=date("h:i:sa");
    $getdate=date('Y/m/d');
    mysqli_query($connect, "INSERT INTO dateme (Session_id, Device_name,yes,no_avoid,date_entry,time_entry)
    VALUES ('$id','$Device', $noCount,$yesCount,'$getdate','$time');");
    echo $result;
}

?>