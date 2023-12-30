<html class="h-full bg-gray-100">
    <head>
        <title><?php 
                        if ($_SERVER['REQUEST_URI']=="/filter") echo "Filter";
                        else if ($_SERVER['REQUEST_URI']=="/about") echo "About";
                        else echo "home"; 
            ?>
        </title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="h-full">  
        <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/bookstore/" class="<?php echo $_SERVER['REQUEST_URI']=="/bookstore/"?"bg-gray-900 text-white rounded-md px-3":"text-gray-300 hover:bg-gray-700 hover:text-white rounded-md"?> py-2 text-sm font-medium" aria-current="page">Library</a>
                    <a href="/bookstore/filter.php" class="<?php echo $_SERVER['REQUEST_URI']=="/bookstore/filter"?"bg-gray-900 text-white rounded-md px-3":"text-gray-300 hover:bg-gray-700 hover:text-white rounded-md"?> py-2 text-sm font-medium">Filter</a>
                    <a href="/bookstore/about.php" class="<?php echo $_SERVER['REQUEST_URI']=="/bookstore/about"?"bg-gray-900 text-white rounded-md px-3":"text-gray-300 hover:bg-gray-700 hover:text-white rounded-md"?> py-2 text-sm font-medium">About</a>
                    </div>
                </div>
                </div>
            </div>

        </nav>
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?php 
                        if ($_SERVER['REQUEST_URI']=="/bookstore/filter") echo "Filter";
                        else if ($_SERVER['REQUEST_URI']=="/bookstore/about") echo "About";
                        else echo "Library";
                         
            ?></h1>
    </div>
  </header>