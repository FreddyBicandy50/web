<?php
$twin = 'twin';
if (URL("/$twin") || URL("/$twin/") || URL("/$twin?i=1")) {
    die(require("twinflame/page/twinflame.php"));
}
