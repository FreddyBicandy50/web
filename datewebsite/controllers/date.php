<?php
// Check if the device is an iPhone or running on Linux
if (Mobile($Device))
    // Require the notfound_page if the condition is met
    require($notfound_page);
else
    // Require the date.php page if the condition is not met
    require("datewebsite/pages/date.php");
