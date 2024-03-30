<?php
!$_SESSION['auth'] ? header('location:' . $notes_router['sign_in']) : '';

$page_Title = 'Description';
require('notes/partials/template.php');
require('notes/function/display.php');
require('notes/database/query.php');
require('notes/database/connect.php');
require('.main/database/fetch.php');
?>

<main>
    <div class='absolute inset-0 -z-10 overflow-hidden'>
        <svg class='absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]'
             aria-hidden='true'>
            <defs>
                <pattern id='e813992c-7d03-4cc4-a2bd-151760b470a0' width='200' height='200' x='50%' y='-1'
                         patternUnits='userSpaceOnUse'>
                    <path d='M100 200V.5M.5 .5H200' fill='none'/>
                </pattern>
            </defs>
            <svg x='50%' y='-1' class='overflow-visible fill-gray-50'>
                <path d='M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z'
                      stroke-width='0'/>
            </svg>
            <rect width='100%' height='100%' stroke-width='0' fill='url(#e813992c-7d03-4cc4-a2bd-151760b470a0)'/>
        </svg>
    </div>

    <?php
    $QUERY = new query();
    $result = $QUERY->get_details($_SESSION['connection'], $database);
    $note_desc = fetch($result);
    foreach ($note_desc as $note) display_details($note);

    ?>


    </div>

</main>
<div>


    <a href=<?= $notes_router['REST'][3] . $_GET['request'] ?> style='margin-top:5%;margin-left:80%' align='right'
       class="inline-flex px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
        </svg>
        Delete
    </a>


</div>