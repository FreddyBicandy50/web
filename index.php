<?php


if($_SERVER['REQUEST_URI']=="/bookstore/") require("bookstore/controllers/library.php");
else if($_SERVER['REQUEST_URI']=='/bookstore/filter') require("bookstore/controllers/filter.php");
else if($_SERVER['REQUEST_URI']=='/bookstore/about') require("bookstore/controllers/about.php");
else if($_SERVER['REQUEST_URI']=='/gowme'){
       require("datewebsite/fetch_agent.php");
      
       if($Device=="Linux" ||  $Device=="iPhone"){
            require("404.php");
            
        }else{
             require("datewebsite/date.php"); 
        }   
      
} 
else if($_SERVER['REQUEST_URI']=='/SHESAIDYESS!') require("datewebsite/yes.html");
else if($_SERVER['REQUEST_URI']=='/' || $_SERVER['REQUEST_URI']=='/?i=1') require("default.php");
else  require("404.php");
 
     
        
?>