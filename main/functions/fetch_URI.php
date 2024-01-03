<?php
function URL($route){
    if($_SERVER['REQUEST_URI']==$route) return true;
    return false;
}
