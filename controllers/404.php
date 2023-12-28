<?php
    require("pages/404.php");
    if($_SERVER['REQUEST_URI']=='/gowme'){
        print(
            "<h2 align='center'style='color:white;font-family:Courier New'>
                 Use your LAPTOP! 
            </h2>
            ") ;

    }else{
          print(
            "<h2 align='center'style='color:white;font-family:Courier New'>
                Something went wrong
            </h2>
            ") ;
    }
?>