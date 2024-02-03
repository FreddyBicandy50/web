<?php


require("notes/partials/routes.php");

if (URL($notes_main)|| URL($notes_main.'/'))
    die(require("notes/page/notes.php"));

$request= explode("?",$_SERVER[$URI]);
$request="?".$request[1];
if (URL($notes_description.$request)|| URL($notes_description.'/'.$request))
    die(require("notes/page/description.php"));
