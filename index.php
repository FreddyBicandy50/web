<?php

 require("settings/env.php");
 if($_SERVER['REQUEST_URI']=="/bookstore/")
 { 
     
 }else if($_SERVER['REQUEST_URI']=='/gowme'){
          require("datewebsite/functions/fetch_agent.php");
          if($Device=="Linux" ||  $Device=="iPhone"){
               require("404.php");
               
          }else{
               require("datewebsite/controllers/date.php"); 
          }   
          
     } 
     else if($_SERVER['REQUEST_URI']=='/SHESAIDYESS!') require("datewebsite/pages/yes.php");
     else if($_SERVER['REQUEST_URI']=='/' || $_SERVER['REQUEST_URI']=='/?i=1') require("settings/default.php");
     else  require("settings/404.php");

 