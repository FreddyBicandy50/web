<?php


$Device;
for ($i = 0; $i < strlen($user); $i++) {
    if ($user[$i] == ';') break;
    if ($user[$i] == '(') {
        $flag = true;
        continue;
    }
    if ($flag) {
        $Device = $Device . $user[$i];
    }
}
