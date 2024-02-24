<?php
require('notes/function/authenticate.php');
require('notes/database/connect.php');
require('.main/database/fetch.php');
require('notes/database/query.php');


function del($auth)
{
    echo "<title>deleting...</title>";
    $json = file_get_contents('notes/database/session_data.json');
    $user = json_decode($json, true);
    return !$auth ?
        (
            $user['id'] == $_SESSION['user_id'] ?
            del(true) : die("<h1>Session is Terminated!</h1>")
        ) : true;
}
function sign_in($object)
{

    echo "<title>Signing in...</title>";
    return (new authenticate())->auth($object) ?  true : false;
}

function sign_up($object)
{
    echo "<title>Signing up...</title>";
    if(empty($object['POST_password']) || empty($object['GET_password'])) die("<h1>Password is empty</h1>");
    return (new authenticate())->auth($object) ?  true : false;
}
function insert($dd, $reroute)
{
    echo "<title>inserting...</title>";
    return $dd ? header("location:" . $reroute['page']) : die($reroute['error']);
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
                    'hash'=>false,
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

URL($notes_router['REST'][1]) ?
    (
        !empty($user) ?
        $_SESSION['valid'] = false .
        header("location:" . $notes_router['register'])
        : (
            sign_up(
                $object = [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "POST_password" => $_POST['password'],
                    "GET_password" => $_POST['confirm']
                ]
            ) ?
            (
                (new query)->set_user($_SESSION['connection'],$database,$object)?
                 header('location:'.$notes_router['main']): die('error signing Up')
            ) : ''
        )
    ) : '';

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
        ),
        $route = [
            'page' => $notes_router['create'],
            'error' => $notfound_page
        ]
    ) : '';

//if the route is to sign in
URL($notes_router['REST'][3] . $_GET['request']) ?
    (
        del(true) ?
        (new query)->del_note(
            $_SESSION['connection'],
            $database,
            $_GET['request'],
            $notes_router['main']
        ) : ''
    ) : '';
