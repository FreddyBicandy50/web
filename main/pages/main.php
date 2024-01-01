<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>

  <!-- Tailwind css -->
  <script src=<?= $CSS_Tailwind ?>></script>
  <div>
    <!-- navbar -->
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-5 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <!-- Logo -->
          <a href="/" class="-m-1.5 p-1.5"> <img class="h-8 w-auto" src=<?= $LOGO_Profile . "alt='Site Logo'" ?>> </a>
          <!-- Dropdown Menu -->
          <div><?php require($Menu_Dropdown); ?></div>
        </div>
        <script>
          <?php include("main/js/theme.js"); ?>
        </script>

        <h6 id="themeButton" class="font-bold tracking-tight">Change Theme</h6>

        <button id="theme" onclick="changeTheme()"><img class="h-8 w-auto" src=<?= $LOGO_lightTheme . " alt='Theme Icon'" ?>></button>
      </nav>
    </header>
</head>

<body>
  <!-- Styling -->
  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
      </div>

      <!-- Code -->
      <div class="text-center">
        <!-- Welcome message -->
        <h1 id="Title" class="text-4xl font-bold tracking-tight sm:text-6xl">
          <?php
          require($function_date_website . "fetch_agent.php");
          echo $Device == "Windows NT 10.0" ? "Welcome Windows" : "Welcome " . $Device;
          ?>
        </h1>
        <!-- Description -->
        <p class="mt-6 text-lg leading-8 text-gray-400">
          <i>Server main page use the buttons below to redirect you to a specified project Library</i>.
        </p>
        <!-- Project Buttons -->
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/gowme/" target="_blank" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Date me</a>
          <a href="/bookstore/" target="_blank" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Book Store</a>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>