<?php
    require("cars_num/partials/router.php");
    if(URL($carsNum_main) || URL($carsNum_main.'/')){
       die(require("cars_num/page/search.php"));
   }
  
  else if(URL($carsNum_result) ){
      die(require("cars_num/page/main.php"));
   }