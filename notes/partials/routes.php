<?php
$_DIR_ = 'notes/';

$notes_router = [
    'sign_in' => '/notes/sign_in',
    'register' => '/notes/register',
    'main' => '/notes/',
    'description' => '/notes/description',
    'create' => '/notes/create',
    'REST' => ['/notes/sign_in/?request=', '/notes/register/?request=', '/notes/create/?note=', '/notes/delete/?request=']
];

$notes_DIR = [
    'form' => $_DIR_ . 'page/form.php',
    'Register' => $_DIR_ . 'page/form.php',
    'main' => $_DIR_ . 'page/notes.php',
    'description' => $_DIR_ . 'page/description.php',
    'create' => $_DIR_ . 'page/create.php',
    'REST' => $_DIR_ . 'function/REST.php'
];
