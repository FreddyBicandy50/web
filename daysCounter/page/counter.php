<!DOCTYPE html>
<html>

<head>
   <!-- Include external CSS file -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Title and Fav icon` -->
   <title>Main Page</title>
   <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />

   <!-- Tailwind CSS and Theme Switching -->
   <script src=<?= $css_tailwind ?>></script>
   <style>
      .heart-rate {
         width: 150px;
         height: 73px;
         position: relative;
         margin: 20px auto;
      }

      .fade-in {
         position: absolute;
         width: 100%;
         height: 100%;
         background-color: #e2e8f0;
         top: 0;
         right: 0;
         animation: heartRateIn 2.5s linear infinite;
      }

      .fade-out {
         position: absolute;
         width: 120%;
         height: 100%;
         top: 0;
         left: -120%;
         animation: heartRateOut 2.5s linear infinite;
         background: rgb(226, 232, 240);
         background: -moz-linear-gradient(left, rgb(226, 232, 240) 0%, rgb(226, 232, 240) 50%, rgba(0, 0, 0, 0) 100%);
         background: -webkit-linear-gradient(left, rgb(226, 232, 240) 0%, rgb(226, 232, 240) 50%, rgba(0, 0, 0, 0) 100%);
         background: -o-linear-gradient(left, rgb(226, 232, 240) 0%, rgb(226, 232, 240) 50%, rgba(0, 0, 0, 0) 100%);
         background: -ms-linear-gradient(left, rgb(226, 232, 240) 0%, rgb(226, 232, 240) 50%, rgba(0, 0, 0, 0) 100%);
         background: linear-gradient(to right, rgb(226, 232, 240) 0%, rgb(226, 232, 240) 80%, rgba(0, 0, 0, 0) 100%);
      }

      @keyframes heartRateIn {
         0% {
            width: 100%;
         }

         50% {
            width: 0;
         }

         100% {
            width: 0;
         }
      }

      @keyframes heartRateOut {
         0% {
            left: -120%;
         }

         30% {
            left: -120%;
         }

         100% {
            left: 0;
         }
      }

      p {
         font-size: 5em;
         text-shadow: 5px 10px 10px rgba(0, 0, 0, 0.75),
            -20px -20px 30px rgba(0, 0, 0, 0.75);
      }
   </style>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>

<body bgcolor="#e2e8f0">
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

               <h3 style="color:#ad64ff;margin-top:6%" id="main_title" class="text-1xl font-bold tracking-tight sm:text-5xl">
                  بِغِنًى
               </h3>
               <div class="fade-in"></div>
               <div class="fade-out"></div>
            </div>
         </div>
</body>

</html>