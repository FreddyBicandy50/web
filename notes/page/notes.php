<?php
$Title = 'Notes';
require("notes/partials/template.php"); ?>



<main>
    <div>
        <?php
        require('notes/function/fetch_notes.php');
        
        ?>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">

            <?php

            while ($notes = mysqli_fetch_assoc($result)) {
                print("
                    <li class='flex justify-between gap-x-6 py-5'>
                        <div class='flex min-w-0 gap-x-4'>
                        <img class='h-12 w-12 flex-none rounded-full bg-gray-50' src='{$notes['image']}' alt=''>
                    <div class= 'min-w-0 flex-auto'>
                        <p class= 'text-sm font-semibold leading-6 text-gray-900'>{$notes['name']}</p>
                        <p class='mt-1 truncate text-xs leading-5 text-gray-500'>{$notes['email']}</p>
                    </div>
                    <div class='flex justify-between gap-x-6 py-0'>
                        <p class='mt-1 truncate text-xl leading-5 text-gray-700'><a href='$notes_description?request={$notes['note_id']}'>{$notes['content']}</a>
                    </div>
 
                </div>
                <div class='hidden shrink-0 sm:flex sm:flex-col sm:items-end'>
                    <p class= 'text-sm leading-6 text-gray-900'>{$notes['due']}</p>
                    <p class='mt-1 text-xs leading-5 text-gray-500'>entry date <time datetime='2023-01-23T13:23Z'>{$notes['date']}</time></p>
                </div>
            </li>"
                );
            }
            ?>

        </ul>

    </div>
</main>
</div>