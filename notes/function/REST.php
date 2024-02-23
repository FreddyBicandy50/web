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


$user = fetch(
    (
        new query())->get_users(
        $_SESSION['connection'],
        $database,
        $_POST['email']
    )
);

//if the route is to sign in
$_SESSION['user_id'] = $user[0]['id'];
URL($notes_router['REST'][0]) ?
    (new authenticate())->validate(
        !empty($user) ? sign_in(
            //lets authenticate user
            $object = [
                'sign_in' => $notes_router['sign_in'],
                'main' => $notes_router['main'],
                'POST_password' => $_POST['password'],
                'GET_password' => $user[0]['password']
            ]
        ) : false
    ) : false;


