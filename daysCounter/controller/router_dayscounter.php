<?php
$love_counter_router= 'it_all_started_from';

if (URL("/$love_counter_router") || URL("/$love_counter_router/")){
    die(require("daysCounter/page/counter.php"));
}
