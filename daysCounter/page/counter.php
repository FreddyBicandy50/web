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
   <script>
      // Function to update the time sections dynamically
      function updateDynamicTimeDisplay() {
         const currentDate = new Date();
         const startDate = new Date('2023-09-05T09:30:00');

         const timeDifference = currentDate - startDate;

         const seconds = Math.floor(timeDifference / 1000) % 60;
         const minutes = Math.floor(timeDifference / (1000 * 60)) % 60;
         const hours = Math.floor(timeDifference / (1000 * 60 * 60)) % 24;
         const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
         const months = Math.floor(timeDifference / (1000 * 60 * 60 * 24 * 30));

         // Update the time sections on the screen
         document.getElementById('days-section').textContent = `${days} days`;
         document.getElementById('months-section').textContent = `${months} months`;
         document.getElementById('hours-section').textContent = `${hours} hours`;
         document.getElementById('minutes-section').textContent = `${minutes} minutes`;
         document.getElementById('seconds-section').textContent = `${seconds} seconds`;
      }

      // Update the time display every second
      setInterval(updateDynamicTimeDisplay, 1000);

      // Initial update
      updateDynamicTimeDisplay();
   </script>
   <!-- Tailwind CSS and Theme Switching -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>

<body>
   <div style="margin-top:3%">
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