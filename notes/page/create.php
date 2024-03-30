<?php
$page_Title = "Create";
require("notes/partials/template.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
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

<form method="POST" action="<?= $notes_router['REST'][2] ?>" class="form-container">
    <label for="Create Note" class="block text-sm font-medium leading-6 text-gray-900"></label>
    <div class="relative mt-2 rounded-md shadow-sm">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <span class="text-gray-500 sm:text-sm"></span>
        </div>

        <table>
            <tr>
                <td>
                    <input style="margin-left:10px;margin-top:20px" required type="text" name="title" id="title"
                           class="block w-50 rounded-md border-0 py-4 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           placeholder="Note Title...">
                </td>
                <td>
                    <input style="margin-left:10px;margin-top:20px" type="text" name="due" id="due"
                           class=" rounded-md border-0 py-2 pl-5 pr-1 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           placeholder="Due Date...">
                </td>
            </tr>
        </table>
        <input style="margin-left:10px;margin-top:20px" required type="text" name="desc" id="desc"
               class="block w-100 rounded-md border-0 py-20 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
               placeholder="Note Description...">


        <button style="margin-left:10px;margin-top:20px"
                class='rounded-md bg-indigo-400 px-8 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'
                id="save" name="save">save
        </button>

    </div>
</form>