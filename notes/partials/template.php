<html class="h-full bg-gray-100">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $page_Title ?>
    </title>
    <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />
    <script src="<?= $css_tailwind ?>"></script>
</head>

<body>
    <div class="min-h-full">
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900" style="color: #6366f1"><?php
                                                                                                   echo $page_Title=='Sign in'? "<a href='/'>{$page_Title}</a>" :$page_Title;                                                                                   ?></h1>
            </div>
            <?php
            $_SESSION['reset'] = rand(1235067, 6524897);
            print(URL($notes_router['main']) ?
                "<div align='right' class='mx-auto max-w-7xl px-9 py-6 sm:px-6 lg:px-8'>
                <a href='{$notes_router['REST'][0]}{$_SESSION['reset']}' class='rounded-full bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
                    Sign out</a> 
            </div>"
                : (
                    URL($notes_router['create']) ?
                    "<div align='right' class='mx-auto max-w-7xl px-9 py-6 sm:px-6 lg:px-8'>
                <a href='/notes/' class='rounded-full bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
                    Home</a> 
            </div>" : ''
                )) ?>


        </header>

</body>