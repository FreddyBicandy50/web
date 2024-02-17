<?php
function display($info, $description)
{

    return print("
                    <li class='flex justify-between gap-x-6 py-5'>
                        <div class='flex min-w-0 gap-x-4'>
                        <img class='h-12 w-12 flex-none rounded-full bg-gray-50' src='{$info['image']}' alt=''>
                    <div class= 'min-w-0 flex-auto'>
                        <p class= 'text-sm font-semibold leading-6 text-gray-900'>{$info['name']}</p>
                        <p class='mt-1 truncate text-xs leading-5 text-gray-500'>{$info['email']}</p>
                    </div>
                    <div class='flex justify-between gap-x-6 py-0'>
                        <p class='mt-1 truncate text-xl leading-5 text-gray-700'><a href='{$description}?request={$info['note_id']}'>{$info['content']}</a>
                    </div>
 
                </div>
                <div class='hidden shrink-0 sm:flex sm:flex-col sm:items-end'>
                    <p class= 'text-sm leading-6 text-gray-900'>{$info['due']}</p>
                    <p class='mt-1 text-xs leading-5 text-gray-500'>entry date <time datetime='2023-01-23T13:23Z'>{$info['date']}</time></p>
                </div>
            </li>"
    );
}
