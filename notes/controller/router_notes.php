<?php
require("notes/controller/router_handler.php");
require("notes/partials/routes.php");


$router = new router_handler();

//checking project routes and redirecting to target page
$router->get($notes_router['main']) ? die(require($notes_DIR['main'])) : '';

$router->get($notes_router['description'] . '?request=' . $_GET['request']) ? die(require($notes_DIR['description'])) : '';

$router->get($notes_router['sign_in']) ? die(require($notes_DIR['form'])) : '';
$router->get($notes_router['register']) ? die(require($notes_DIR['form'])) : '';
$router->get($notes_router['create']) ? die(require($notes_DIR['create'])) : '';

$router->get($notes_router['REST'][0]) ? die(require($notes_DIR['REST'])) : '';
$router->get($notes_router['REST'][1]) ? die(require($notes_DIR['REST'])) : '';
$router->get($notes_router['REST'][2]) ? die(require($notes_DIR['REST'])) : '';
$router->get($notes_router['REST'][3].$_GET['request']) ? die(require($notes_DIR['REST'])) : '';

 
if ($_GET['request']== $_SESSION['reset']){
   session_destroy();
   header("location:".$notes_router['sign_in']);
}  

