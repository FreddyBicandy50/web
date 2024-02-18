<?php
require('notes/database/connect.php');
require('notes/database/query.php');

$QUERY = new query();

function sign_in($sign_in,$main,$QUERY,$connect,$database,$email,$password){

    echo "<title>Signing in...</title>";
    require('.main/database/fetch.php');
    $user=fetch($QUERY->get_users($connect, $database,$email));  

    $user[0]['email']==$email?
                (
                    $user[0]['password'] == $password? $_SESSION['auth'] = true:''
                )
    :$_SESSION['auth'] = false;

    if($_SESSION['auth']){
        $_SESSION['found']=true;
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        die(header("location:" . $main));
    }else{
        $_SESSION['found']=false;
        die(header("location:" . $sign_in));
    }
}
function register(){
    echo "<title>Registering...</title>";

}
function create(){
    
}
function _delete_(){
    
}


URL($notes_router['REST'][0]) ? sign_in(
    $notes_router['sign_in'],
    $notes_router['main'],
    $QUERY,$connect,
    $database,
    $_POST['email'],
    $_POST['password']) : '';


URL($notes_router['REST'][1]) ? register() : '';
URL($notes_router['REST'][0]) ? create() : '';
URL($notes_router['REST'][0])? _delete_():'';