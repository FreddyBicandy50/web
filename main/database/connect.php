<?php
function connection($db_name,$query){
    require("main/env/env.php");
    if (HTTP($server_local[0]) || HTTP($server_local[1]) || HTTP($server_private[0]) || HTTP($server_private[1])) {
        if (HTTP($server_local[0]) || HTTP($server_private[0]))
            $db = new Database($db_name, true, $server_private[0]);
        else
            $db = new Database($db_name, true, $server_private[1]);

        // Connect to the 'test' database
        return $db;
    } else {
        $db = new Database($db_name, false, "");
        // Connect to the 'if0_35693876_bookstore' database
        return $db;
    }
    
}
