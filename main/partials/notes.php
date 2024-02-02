<?php


require("notes/partials/routes.php");

if (URL($notes_main)|| URL($notes_main.'/'))
    die(require("notes/page/notes.php"));
