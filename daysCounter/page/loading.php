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
      #overlayer {
         width: 100%;
         height: 100%;
         position: fixed;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         z-index: 2;
         background: #4a4a4a;
      }

      .preloader p {
         position: absolute;
         top: 80%;
         left: 50%;
         margin-left: -45px;
         width: 120px;
         height: 90px;

         text-align: center;
         color: #fff;
         font-size: 24px;
         z-index: 3;
      }

      .loader {
         display: inline-block;
         width: 30px;
         height: 30px;
         position: absolute;
         z-index: 3;
         border: 4px solid #Fff;
         top: 50%;
         animation: loader 2s infinite ease;
      }

      .loader-inner {
         vertical-align: top;
         display: inline-block;
         width: 100%;
         background-color: #fff;
         animation: loader-inner 2s infinite ease-in;
      }

      @keyframes loader {
         0% {
            transform: rotate(0deg);
         }

         25% {
            transform: rotate(180deg);
         }

         50% {
            transform: rotate(180deg);
         }

         75% {
            transform: rotate(360deg);
         }

         100% {
            transform: rotate(360deg);
         }
      }

      @-webkit-keyframes loader {
         0% {
            transform: rotate(0deg);
         }

         25% {
            transform: rotate(180deg);
         }

         50% {
            transform: rotate(180deg);
         }

         75% {
            transform: rotate(360deg);
         }

         100% {
            transform: rotate(360deg);
         }
      }

      @keyframes loader-inner {
         0% {
            height: 0%;
         }

         25% {
            height: 0%;
         }

         50% {
            height: 100%;
         }

         75% {
            height: 100%;
         }

         100% {
            height: 0%;
         }
      }

      @-webkit-keyframes loader-inner {
         0% {
            height: 0%;
         }

         25% {
            height: 0%;
         }

         50% {
            height: 100%;
         }

         75% {
            height: 100%;
         }

         100% {
            height: 0%;
         }
      }
   </style>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script>
      $(window).load(function() {
         $(".preloader").delay(5000).fadeOut("slow");
         $("#overlayer").delay(5000).fadeOut("slow");
      })
   </script>
</head>

<body bgcolor="#1f2937">
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
            <h1 style="color:#E2E8F0" id="main_title" class="text-4xl font-bold tracking-tight sm:text-6xl">
               <?php echo $Device == "Windows NT 10.0" ? "Welcome Windows" : "Welcome " . $Device; ?>
            </h1>
            <div id="overlayer"></div>
            <div class="preloader">
               <div class="loader">
                  <span class="loader-inner"></span>
               </div>
               <p> Loading...</p>
            </div>
         </div>
</body>

</html>