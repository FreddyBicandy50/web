<?php

if (URL('/leahabdallah') || URL('/leahabdallah/') || URL('/leahabdallah?i=1'))
    die(require("eastwood/leah.php"));

if (URL('/EdmondAbdelNour') || URL('/EdmondAbdelNour/') || URL('/EdmondAbdelNour?i=1'))
    die(require("eastwood/edmon/edmon.html"));
