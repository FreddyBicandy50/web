<?php
    require("cars_num/partials/router.php");
    $request = explode("!", $_GET['request']);
  
    if(URL($carsNum_main) || URL($carsNum_main.'/')){
      die(require("cars_num/page/search.php"));
  }
  
    if(URL($carsNum_result) ){
      die(require("cars_num/page/main.php"));
  }