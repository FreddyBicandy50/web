<?php

if (URL('/leahabdallah') || URL('/leahabdallah/') || URL('/leahabdallah?i=1'))
    die(require("eastwood/leah/index.html"));

if (URL('/EdmondAbdelNour') || URL('/EdmondAbdelNour/') || URL('/EdmondAbdelNour?i=1'))
    die(require("eastwood/edmon/index.html"));

if (URL('/hindawi') || URL('/hindawi/') || URL('/hindawi?i=1'))
    die(require("eastwood/hendawi/index.html"));

if (URL('/baz') || URL('/baz/') || URL('/baz?i=1'))
    die(require("eastwood/baz/index.html"));


if (URL('/grace') || URL('/grace/') || URL('/grace?i=1'))
    die(require("eastwood/grace/index.html"));

if (URL('/noordiya') || URL('/noordiya/') || URL('/noordiya?i=1'))
    die(require("eastwood/noordiya/index.html"));
