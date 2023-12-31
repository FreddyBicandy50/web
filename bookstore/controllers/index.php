<?php
    echo $_SERVER["REQUEST_URI"];
    if($_SERVER["REQUEST_URI"]=="/bookstore/") require ("library.php");
    if($_SERVER["REQUEST_URI"]=="/bookstore/filter") require ("filter.php");
