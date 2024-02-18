<?php
!$_SESSION['auth'] ? header('location:' . $notes_router['sign_in']) : '';

$page_Title = 'Description';
require('notes/partials/template.php');
require('notes/function/display.php');
require('notes/database/query.php');
require('notes/database/connect.php');
require('.main/database/fetch.php');
?>

<main >
    <div class='absolute inset-0 -z-10 overflow-hidden'>
        <svg class='absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]' aria-hidden='true'>
            <defs>
                <pattern id='e813992c-7d03-4cc4-a2bd-151760b470a0' width='200' height='200' x='50%' y='-1' patternUnits='userSpaceOnUse'>
                    <path d='M100 200V.5M.5 .5H200' fill='none' />
                </pattern>
            </defs>
            <svg x='50%' y='-1' class='overflow-visible fill-gray-50'>
                <path d='M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z' stroke-width='0' />
            </svg>
            <rect width='100%' height='100%' stroke-width='0' fill='url(#e813992c-7d03-4cc4-a2bd-151760b470a0)' />
        </svg>
    </div>

    <?php
    $QUERY = new query();
    $result = $QUERY->get_details($_SESSION['connection'], $database);
    $note_desc = fetch($result);
    foreach ($note_desc as $note) {
        display_details($note);
    }


    ?>


    </div>

    </main>