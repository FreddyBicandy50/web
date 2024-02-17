<?php

class router_handler
{
    public function get($route)
    {
        if (URL($route)) return true;
    }
}
