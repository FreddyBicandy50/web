<?php

if (URL('/leahabdallah') || URL('/leahabdallah/') || URL('/leahabdallah?i=1'))
    die(require("eastwood/leah/index.html"));

if (URL('/EdmondAbdelNour') || URL('/EdmondAbdelNour/') || URL('/EdmondAbdelNour?i=1'))
    die(require("eastwood/edmon/index.html"));

if (URL('/hindawi') || URL('/hindawi/') || URL('/hindawi?i=1'))
    die(require("eastwood/hendawi/index.html"));
