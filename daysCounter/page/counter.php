<!DOCTYPE html>
<html>

<head>
   <!-- Include external CSS file -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Title and Fav icon` -->
   <title>Main Page</title>
   <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />
   <style>
      body {
         background-image: url('splash.png');
      }

      <?=
      include 'daysCounter/style/style.css' ?>
   </style>
   <!-- Tailwind CSS and Theme Switching -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>

<body>
      <img src="">
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

            <p style="color:#000000" id="main_title" class="text-1xl font-bold tracking-tight sm:text-6xl">
               لِتَسْكُنْ فِيكُمْ كَلِمَةُ ٱلْمَسِيحِ
            </p>


            <div style="margin-top:7%; margin-left:40%" class="heart-rate">

               <h3 style="color:#ad64ff;margin-top:6%" id="main_title" class="text-1xl font-bold tracking-tight sm:text-4xl">
                  بِغِنًى
               </h3>

               <div class="fade-in"></div>
               <div class="fade-out"></div>
            </div>
         </div>
</body>

</html>