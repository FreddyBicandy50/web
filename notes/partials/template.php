<html class="h-full bg-gray-100">

<head>
    <title>

    </title>
    <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />
    <script src="<?= $css_tailwind ?>"></script>
</head>

<body>
    <div class="min-h-full">
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900" style="color: #6366f1"><?php
                                                                                                    echo $page_Title                                                                                     ?></h1>
            </div>
            <?=URL($notes_router['main'])? 
            "<div align='right' class='mx-auto max-w-7xl px-9 py-6 sm:px-6 lg:px-8'>
                <a href='/notes/sign_in' class='rounded-full bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
                    Sign out</a> 
            </div>"
            :''?>;
            

        </header>

</body>