<html class="h-full bg-gray-100">

<head>
    <title><?php
            if (URL($route_bookstore_search)) echo "Search";
            else if (URL($route_bookstore_about)) echo "About";
            else echo "Library"
            ?>
    </title>
    <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />
    <script src="<?= $css_tailwind ?>"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="<?= $logo_web ?>" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="<?= $route_bookstore_main ?>" class="<?php echo URL($route_bookstore_main) ? "bg-gray-900 text-white rounded-md px-3" : "text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" ?> py-2 text-sm font-medium" aria-current="page">Library</a>
                                <a href="<?= $route_bookstore_search ?>" class="<?php echo URL($route_bookstore_search . $_GET['request']) ? "bg-gray-900 text-white rounded-md px-3" : "text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" ?> py-2 text-sm font-medium">Search</a>
                                <a href="<?= $route_bookstore_about ?>" class="<?php echo URL($route_bookstore_about) ? "bg-gray-900 text-white rounded-md px-3" : "text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" ?> py-2 text-sm font-medium">About</a>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900" style="color: #6366f1"><?php
                                                                                                    if (URL($route_bookstore_search)) echo "Search";
                                                                                                    else if (URL($route_bookstore_about)) echo "About";
                                                                                                    else echo "Library"

                                                                                                    ?></h1>
            </div>
        </header>