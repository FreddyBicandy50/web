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
function insert($dd,$reroute)
{
    echo "<title>inserting...</title>";
    return $dd ?header("location:".$reroute['page']):die ($reroute['error']);
}



if (isset($_POST['email'])) {
    $user = fetch(
        (new query())->get_users(
            $_SESSION['connection'],
            $database,
            $_POST['email']
        )
    );
    $_SESSION['user_id'] = $user[0]['id'];
}
//if the route is to sign in
URL($notes_router['REST'][0]) ?
    (new authenticate())->validate(
        !empty($user) ? (
            sign_in(
                //lets authenticate user
                $object = [
                    'sign_in' => $notes_router['sign_in'],
                    'main' => $notes_router['main'],
                    'POST_password' => $_POST['password'],
                    'GET_password' => $user[0]['password']
                ]
            ) ?
            (new authenticate())->json_dump(
                $object = [

                    'id' => $user[0]['id'],
                    'name' => $user[0]['name'],
                    'email' => $user[0]['email'],
                    'password' => $user[0]['password'],
                    'image' => $user[0]['image']

                ]
            )
            : '') : false
    ) : false;

//if the route is to sign in
URL($notes_router['REST'][2]) ? 
    insert(
    (new query)->set_details(
        $_SESSION['connection'],
        $database,
        $_SESSION['user_id'],
        $_POST['title'],
        $_POST['due'],
        $_POST['desc'],
        date('Y/m/d'),
    ) ,
    $route=[
        'page'=> $notes_router['create'],
        'error'=> $notfound_page
    ]
    ): '';
