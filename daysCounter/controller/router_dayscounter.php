<?php
$twin= 'twin';

if (URL("/$twin") || URL("/$twin/")|| URL("/$twin/?i=1")){
    die(require("daysCounter/page/counter.php"));
}
