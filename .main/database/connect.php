<?php
function connection($db_name){
    require("main/env/env.php");
    if (HTTP($server_local[0]) || HTTP($server_local[1]) || HTTP($server_private)) 
        return new Database($db_name, true, $server_private);
    else 
        return new Database($db_name, false, "");
}
