<!DOCTYPE html>
<html>

<head>
  <!-- Include external CSS file -->
  <style>
    <?=     
    include 'main/css/style.css' ?>
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title and Fav icon` -->
  <title>Main Page</title>
  <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />

  <!-- Tailwind CSS and Theme Switching -->
  <script src=<?= $css_tailwind ?>></script>
  <div>
    <!-- Navbar -->
    <header onload="default_style()" class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <!-- Logo -->
          <a href="/" class="-m-1.5 p-1.5"> <img class="<?php if (Mobile($Device)) echo 'h-auto w-10';
                                                        else echo 'h-auto w-14' ?>" src=<?= $logo_profile . "alt='Site Logo'" ?>> </a>
          <!-- Dropdown Menu -->
          <div><?php require($menu_dropdown); ?></div>

        </div>
        <!-- Theme Switch Button -->
        <button onclick="redirect()"><img class="<?php if (Mobile($Device)) echo 'h-auto w-8';
                                                  else echo 'h-8 w-auto' ?>" src=<?= $logo_theme . " alt='Theme Icon'" ?>></button>

        <script>
          <?= include("main/js/theme.js"); ?>
        </script>
        <?php
        if (Mobile($Device)) echo '<h6 id="theme_text" class="font-bold tracking-tight"></h6>';
        else echo '<h6 id="theme_text" class="font-bold tracking-tight">Change Theme</h6>' ?>

      </nav>
    </header>
</head>

<body onload="default_style(true)">

  <!-- Styling -->
  <div class="relative isolate px-6 pt-14 lg:px-8">
    <!-- Background shapes -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>
    <!-- Content container -->
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
      </div>
      <!-- Main content -->
      <div class="text-center">
        <!-- Welcome message -->
        <h1 id="main_title" class="text-4xl font-bold tracking-tight sm:text-6xl">
          <?php echo $Device == "Windows NT 10.0" ? "Welcome Windows" : "Welcome " . $Device; ?>
        </h1>
        <!-- Description -->
        <p class="mt-6 text-lg leading-8 text-gray-400">
          <i>Server main page use the buttons below to redirect you to a specified project Library</i>.
        </p>
        <!-- Project Buttons -->
        <?php
        if ($_SERVER["HTTP_HOST"] != 'freddybicandy.42web.io') {
          print("<div class='mt-10 flex items-center justify-center gap-x-6'>
          <a href='$dateme_main' target='_blank' class='rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
            Date me</a>
            <a href='$bookstore' target='_blank' class='rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
            Book Store</a>
            <a href='$notes_main' target='_blank' class='rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
            Notes App</a>
        </div>");
        }
        ?>
      </div>
    </div>
  </div>
  </div>
</body>

</html>