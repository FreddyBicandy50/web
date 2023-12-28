<?php


if($_SERVER['REQUEST_URI']=='/') require("controllers/library.php");
else if($_SERVER['REQUEST_URI']=='/filter') require("controllers/filter.php");
else if($_SERVER['REQUEST_URI']=='/about') require("controllers/about.php");
else if($_SERVER['REQUEST_URI']=='/pleasedateme/date') require("datewebsite/date.html");
else if($_SERVER['REQUEST_URI']=='/pleasedateme/SHESAIDYESS!') require("datewebsite/yes.html");
else require("controllers/404.php");

?>