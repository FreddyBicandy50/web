<?php
require("notes/controller/router_handler.php");
require("notes/partials/routes.php");


$router = new router_handler();


$router->get($notes_router['main']) ? die(require($notes_DIR['main'])) : '';
