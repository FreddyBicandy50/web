<?php
require("notes/controller/router_handler.php");
require("notes/partials/routes.php");


$router = new router_handler();


$router->get($notes_router['main']) ? die(require($notes_DIR['main'])) : '';

$router->get($notes_router['description'].'?request='.$_GET['request']) ? die(require($notes_DIR['description'])) : '';

$router->get($notes_router['sign_in']) ? die(require($notes_DIR['sign_in'])) : '';

$router->get($notes_router['REST'][0]) ? die(require($notes_DIR['REST'])) : '';
