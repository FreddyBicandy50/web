<?php


if($_SERVER['REQUEST_URI']=='/') require("controllers/library.php");
else if($_SERVER['REQUEST_URI']=='/filter') require("controllers/filter.php");
else if($_SERVER['REQUEST_URI']=='/about') require("controllers/about.php");
else require("controllers/404.php");

?>