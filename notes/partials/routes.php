<?php
$_DIR_ = 'notes/';

$notes_router = [
    'signIn' => '/sign_in',
    'Register' => '/register',
    'main' => '/notes/',
    'description' => '/notes/description',
    'create' => '/notes/create',
    'submit' => '/notes/create?Redirect'
];

$notes_DIR = [
    'signIn' => $_DIR_ . 'page/sign_in.php',
    'Register' => $_DIR_ . 'page/register.php',
    'main' => $_DIR_ . 'page/notes.php',
    'description' => $_DIR_ . 'page/description.php',
    'create' => $_DIR_ . 'page/create.php',
    'submit' => $_DIR_ . 'page/submit.php'
];
