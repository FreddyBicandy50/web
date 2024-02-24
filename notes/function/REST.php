<?php
require('notes/function/authenticate.php'); //authentication class
require('notes/database/connect.php');      //connection class
require('.main/database/fetch.php');        //fetch db class
require('notes/database/query.php');        //querying class

isset($_POST['email']) ? //if we have an email input
    //fetch the data from database
    $user = fetch(
        //make a query to get this user based on his email
        (new query())->get_users(
            $_SESSION['connection'],
            $database,
            $_POST['email'] //email submitted
        )
    ) .
    //if we found any store this user id in a session variable
    $_SESSION['user_id'] = $user[0]['id'] : '';






//Function to authenticate the sign in 
function sign_in($object)
{

    echo "<title>Signing in...</title>";
    return
        //validate user to open gates for main page after success checking 
        (new authenticate())->auth($object) ?  true : false;
}

//Sign in route Request
URL($notes_router['REST'][0]) ?
    //validate user 
    (
        new authenticate())->validate(
        //but if the submitted email is found in our records
        !empty($user) ?
            //if it does
            (
                //call sign in function
                sign_in(
                    //lets authenticate user
                    $object = [
                        'hash' => false, //using security
                        'sign_in' => $notes_router['sign_in'],
                        'main' => $notes_router['main'],
                        'POST_password' => $_POST['password'], //user input
                        'GET_password' => $user[0]['password'] //db password
                    ]
                ) ?
                //if found store them in json file
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

//Function sign up accepts an object and validate information's 
function sign_up($object)
{
    echo "<title>Signing up...</title>"; //title page
    //if user input is empty throw error
    if (
        empty($object['POST_password']) || empty($object['GET_password'])
    ) die("<h1>Password is empty</h1>");

    return
        //check the user password and confirm if matches;
        (new authenticate())->auth($object) ?  true : false;
}
//Register route request
URL($notes_router['REST'][1]) ?
    (
        //if the user email found in the database close the gate by adding invalid session
        !empty($user) ?
        $_SESSION['valid'] = false . //setting the valid gate to null to display text based error
        header("location:" . $notes_router['register']) //reroute to the register page (refresh)
        : (
            //but if the user email is unique (meaning : user_input!=$db records)
            sign_up(
                $object = [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "POST_password" => $_POST['password'], //password
                    "GET_password" => $_POST['confirm'] //password confirmation
                ]
            ) ?
            //if passwords check validated
            (
                //create the user
                (new query)->set_user(
                    $_SESSION['connection'],
                    $database,
                    $object //send the user infos
                ) ?
                header('location:' . $notes_router['main']) //go to main  this wont work so it will redirect him to sign in 
                : die('error signing Up') //throw an error if creation failed!
            ) : ''
        )
    ) : '';

//Function to insert notes
function insert($dd, $reroute)
{
    echo "<title>inserting...</title>"; //title

    return
        $dd ? header("location:" . $reroute['page']) : die($reroute['error']);
}
//Creation route request
URL($notes_router['REST'][2]) ?
    //call the insert function if the insertion is success
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



//Note Deletion function
function del($auth)
{
    echo "<title>deleting...</title>"; //title page

    return
        //JSON id=SESSION? authorized auth will be true by default the call is false
        !$auth ?
        //!auth? lets check
        (
            //decode user saved information's 
            $user = (new authenticate)->json_dump(
                $object = ['decode' => true] //send decode signal
            )['id'] == $_SESSION['user_id'] ?
            del(true) : false //json user id is the same as session call del and authenticate
        )
        : true; //if authenticated send true 
}
//Deletion Request
URL($notes_router['REST'][3] . $_GET['request']) ?
    (
        //check user session id and json file id  
        del(false) ? //authenticated?
        //query the deletion
        (new query)->del_note(
            $_SESSION['connection'],
            $database,
            $_GET['request'], //note id
            $notes_router['main'] //main page link to redirect
        ) : ''
    ) : '';
