<?php
!$_SESSION['auth'] ? header('location:' . $notes_router['sign_in']) : '';

$page_Title = 'Notes';
require("notes/partials/template.php");
require('notes/database/connect.php');
require('notes/database/query.php');
require('.main/database/fetch.php');
require('notes/function/display.php');


?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-200">
            <?php
            foreach (fetch(
                (new query)->get_all($_SESSION['connection'], $database)
            ) as $user) display($user, $notes_router['description']);
            ?>
        </ul>

    </div>
    <div class='mt-10 flex items-center justify-center gap-x-6'>
        <a href='/notes/create' class='rounded-full bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
            create</a>
</main>