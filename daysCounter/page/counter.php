<!DOCTYPE html>
<html>

<head>
   <!-- Include external CSS file -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Title and Fav icon` -->
   <title>TwinFlame❤️‍🔥</title>
   <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />
   <style>
      <?= include 'daysCounter/style/style.css' ?>
   </style>
   <script>
      <?= include 'daysCounter/js/counter.js' ?>
   </script>
   <!-- Tailwind CSS and Theme Switching -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>

<body>
   <div style="margin-top:10%">
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="months-section"><b>0 months</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="days-section"><b>0 days</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="hours-section"><b>0 hours</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="minutes-section"><b>0 minutes</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="seconds-section"><b>0 seconds</b></div>
   </div>



   <div class="text-center">
      <!-- Welcome message -->
      <p align="center" style="margin-top:20%;color:#000000">
         لِتَسْكُنْ فِيكُمْ كَلِمَةُ ٱلْمَسِيحِ
      </p>

      <div align="center" style="margin-top:5%" class="heart-rate">
         <h3 style="color:#ffffff" id="main_title">
            <i>بِغِنًى</i>
         </h3>

         <div class="fade-in"></div>
         <div class="fade-out"></div>

      </div>
   </div>
</body>

</html>