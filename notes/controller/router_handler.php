<?php

/*
**THIS CLASS USAGE:
    //get:it will handle a route (URL LINK) and check it using a URL function

*/

class router_handler
{
    public function get($route)
    {
        //example: $route='/notes/' will check if /notes/?= SERVER['REQUEST_URI']
        return URL($route) ? true : false; //yes? return yes
    }
}
