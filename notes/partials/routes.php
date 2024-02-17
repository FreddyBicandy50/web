<?php
$_DIR_ = 'notes/';

$notes_router = [
    'sign_in' => '/notes/sign_in',
    'Register' => '/notes/register',
    'main' => '/notes/',
    'description' => '/notes/description',
    'create' => '/notes/create',
    'REST' => ['/notes/?request=sign_in', '/notes/?request=register', '/notes/?request=create', '/notes/?request=delete']
];

$notes_DIR = [
    'sign_in' => $_DIR_ . 'page/sign_in.php',
    'Register' => $_DIR_ . 'page/register.php',
    'main' => $_DIR_ . 'page/notes.php',
    'description' => $_DIR_ . 'page/description.php',
    'create' => $_DIR_ . 'page/create.php',
    'REST' => $_DIR_ . 'function/REST.php'
];
