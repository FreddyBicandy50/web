<?php

namespace App\Models;

use http\Env\Request;

class agent
{
    public static function mobile()
    {
        $is_iPhone=count(explode('iPhone', Request()->userAgent()))>=2;
        $is_Android=count(explode('Linux', Request()->userAgent()))>=2;
        if( $is_iPhone || $is_Android) return true;


        //by default, it's not a mobile
        return false;
    }
}
