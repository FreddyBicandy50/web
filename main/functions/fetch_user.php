<?php

session_start();    
$_SESSION['username']=session_id();
$users=[
                
            't0debrj8aat4951quilj30bfb5',
            'a56af4e22022b9f95113f3a399eea270',
            '33c09pl1758fjducdrkdslfbkm',
            'a56af4e22022b9f95113f3a399eea270',

            '9d4e568add3ae7c72d8896aadfcb18ed',
            'd48lavg0fj39rktei6eirjsfsi',
            'fbduqtfm20hifhv4h1qhh22j5e',


            'u2uqbcn2aap02bsl1srlh54ceh',
            'mv4h5rk1a4fom1hmr4cae0m1g4',
            '27d668d052827b6e992dd2df399dc753'
        
        ];
foreach ($users as $user){
    if ($_SESSION['username']==$user) {
        $_SESSION['username']='Freddy';
        break;
    }
}