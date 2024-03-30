<?php
require("notes/controller/router_handler.php"); //->get route function
require("notes/partials/routes.php"); //$notes directory and notes routers


$router = new router_handler(); //call router handler class

//checking project routes and redirecting to target page

//check the pages routes 
$router->get($notes_router['sign_in']) ? die(require($notes_DIR['form'])) : '';
$router->get($notes_router['register']) ? die(require($notes_DIR['form'])) : '';
$router->get($notes_router['main']) ? die(require($notes_DIR['main'])) : '';
$router->get($notes_router['create']) ? die(require($notes_DIR['create'])) : '';
$router->get($notes_router['description'] . '?request=' . $_GET['request']) ? die(require($notes_DIR['description'])) : '';

//check the requests [sign_in,register,create,delete] routes from the forms 
$router->get($notes_router['REST'][0]) ? die(require($notes_DIR['REST'])) : ''; //sign in  request
$router->get($notes_router['REST'][1]) ? die(require($notes_DIR['REST'])) : ''; //register request
$router->get($notes_router['REST'][2]) ? die(require($notes_DIR['REST'])) : ''; //create request
$router->get($notes_router['REST'][3] . $_GET['request']) ? die(require($notes_DIR['REST'])) : ''; //delete request

//signing out 
$_GET['request'] == $_SESSION['reset'] ?
    session_destroy() .//destroy all saved sessions
    header("location:" . $notes_router['sign_in']) : '';//route back to sign in page
