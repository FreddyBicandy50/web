<?php


function display($info, $description)
{

    return print("
                    <li class='flex justify-between gap-x-6 py-5'>
                        <div class='flex min-w-0 gap-x-4'>
                        <img class='h-12 w-12 flex-none rounded-full bg-gray-50' src='{$info['image']}' alt=''>
                    <div class= 'min-w-0 flex-auto'>
                        <p class= 'text-sm font-semibold leading-6 text-gray-900'>{$info['name']}</p>
                        <p class='mt-1 truncate text-xs leading-5 text-gray-400'>{$info['email']}</p>
                    </div>
                    <div class='flex justify-between gap-x-6 py-0'>
                        <p class='mt-1 truncate text-xl leading-5 text-gray-500'><a href='{$description}?request={$info['note_id']}'>{$info['content']}</a>
                    </div>
 
                </div>
                <div class='hidden shrink-0 sm:flex sm:flex-col sm:items-end'>
                    <p class= 'text-sm leading-6 text-gray-400'>{$info['due']}</p>
                    <p class='mt-1 text-xs leading-5 text-gray-500'>entry date <time datetime='2023-01-23T13:23Z'>{$info['date']}</time></p>
                </div>
            </li>"
    );
}

function display_details($note)
{
    print("
            <div style='margin-top: 5%;' class='mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10'>
            <div class='lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8'>
            <div class='lg:pr-4'>
                <div class='lg:max-w-lg'>
                    <p class='text-base font-semibold leading-7 text-indigo-400'>Due:{$note['due']}</p>
                    <h1 class='mt-2 text-3xl font-bold tracking-tight text-gray-600 sm:text-4xl'>{$note['title']}</h1>
                    <p class='mt-6 text-xl leading-8 text-gray-500'>{$note['content']}</p>
                </div>
            </div>
        </div>
            ");
}
