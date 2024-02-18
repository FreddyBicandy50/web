<?php

class router_handler
{
    public function get($route)
    {
        return URL($route) ? true : ''; //return route status
    }
}
