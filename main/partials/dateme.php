<?php

# Date me Website
if (URL($route_dateme_main))
     # gowme
     die(require("datewebsite/controllers/date.php"));
else if (URL($route_dateme_yes)) {
     # YES
     $yesCount = isset($_POST['yesCount']) ? $_POST['yesCount'] : null;
     $noCount = isset($_POST['noCount']) ? $_POST['noCount'] : null;
     // Print the values for testing purposes

     die(require("datewebsite/controllers/yes.php"));
}
