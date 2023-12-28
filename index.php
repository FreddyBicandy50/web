<?php


if($_SERVER['REQUEST_URI']=='/') require("controllers/library.php");
else if($_SERVER['REQUEST_URI']=='/filter') require("controllers/filter.php");
else if($_SERVER['REQUEST_URI']=='/about') require("controllers/about.php");
else if($_SERVER['REQUEST_URI']=='/gowme'){
       require("fetch_agent.php");
      
       if($Device=="Linux;" ||  $Device=="iPhone;"){
            require("controllers/404.php");
            
        }else{
             require("datewebsite/date.php"); 
        }   
      
} 
else if($_SERVER['REQUEST_URI']=='/SHESAIDYESS!') require("datewebsite/yes.html");
else  require("controllers/404.php");
 
     
        
?>