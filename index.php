<?php 

if($_SERVER['REQUEST_URI']=="/filter") require("controllers/library.php");
else if($_SERVER['REQUEST_URI']=="/about") require("controllers/library.php");
else require("controllers/library.php");

?>
 