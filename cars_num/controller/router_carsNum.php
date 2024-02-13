<?php
    require("cars_num/partials/router.php");
  $request = explode("!", $_GET['request']);
  
    if(URL($carsNum_main) || URL($carsNum_main.'/') || URL($carsNum_main.'/?request='.$request[0])){
      die(require("cars_num/page/main.php"));
  }