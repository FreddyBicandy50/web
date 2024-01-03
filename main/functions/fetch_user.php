<?php

session_start();    
$_SESSION['username']=session_id();
$users=[    
            't0debrj8aat4951quilj30bfb5',
            'a56af4e22022b9f95113f3a399eea270',
            '33c09pl1758fjducdrkdslfbkm',
            'a56af4e22022b9f95113f3a399eea270'];
foreach ($users as $user){
    if ($_SESSION['username']==$user) {
        $_SESSION['username']='Freddy-PC';
    }
}