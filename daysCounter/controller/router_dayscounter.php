<?php
$love_counter_router= 'twin';

if (URL("/$love_counter_router") || URL("/$love_counter_router/")|| URL("/$love_counter_router/?")){
    die(require("daysCounter/page/counter.php"));
}
