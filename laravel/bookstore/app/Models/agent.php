<?php

namespace App\Models;

class agent
{
    public static function mobile(): bool
    {
        return count(explode("iPhone", Request())) >= 2;
    }
}
