<?php
require('notes/function/authenticate.php');
require('notes/database/connect.php');
require('.main/database/fetch.php');
require('notes/database/query.php');

function sign_in($object)
{
    echo "<title>Signing in...</title>";
    return (new authenticate())->auth($object) ?  true : false;
}


$user = fetch((new query())->get_users($connect, $database, $_POST['email']));
$_SESSION['user_id']=$user[0]['id'];


//if the route is to sign in
(new authenticate())->validate(
    URL($notes_router['REST'][0]) ? (
        //check if we have any user with match email
        !empty($user) ? sign_in(
            //lets authenticate user
            $object = [
                'full_validation_rule' => true,
                'sign_in' => $notes_router['sign_in'],
                'main' => $notes_router['main'],
                'POST_email' => $_POST['email'],
                'GET_email' => $user[0]['email'],
                'POST_password' => $_POST['password'],
                'GET_password' => $user[0]['password']
            ]
            //else reroute to sign in 
        ) : false) : ''
);











// URL($notes_router['REST'][1]) ? register() : '';
// URL($notes_router['REST'][0]) ? create() : '';
// URL($notes_router['REST'][0]) ? _delete_() : '';

// function register()
// {
//     echo "<title>Registering...</title>";
// }
// function create()
// {
// }
// function _delete_()
// {
// }
