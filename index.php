<?php
# Include necessary files
require("main/functions/database.php");
require("main/env/env.php");
require("main/functions/fetch_agent.php");
require("main/functions/fetch_URI.php");
#something new
#something new
#something new
#something new
# MAIN PAGE
# Check if the URI is the root or has a specific parameter
if ($_SERVER[$URI] == '/' || $_SERVER[$URI] == '/?i=1') require($main_page);

# Webconsole
else if ($_SERVER[$URI] == $route_webconsole) require("webconsole/webconsole.php");

# BookStore
else if ($_SERVER[$URI] == $route_bookstore_main)
     # Library
     require("bookstore/controllers/library.php");

else if ($_SERVER[$URI] == $route_bookstore_filter)
     # Filter
     require("bookstore/controllers/filter.php");
else if ($_SERVER[$URI] == $route_bookstore_about)
     # About
     require("bookstore/controllers/about.php");

# Date me Website
else if ($_SERVER[$URI] == $route_dateme_main)
     # gowme
     require("datewebsite/controllers/date.php");

else if ($_SERVER[$URI] == $route_dateme_yes) {
     # YES
     $yesCount = isset($_POST['yesCount']) ? $_POST['yesCount'] : null;
     $noCount = isset($_POST['noCount']) ? $_POST['noCount'] : null;
     // Print the values for testing purposes

     require("datewebsite/controllers/yes.php");
}

# Not Found 404!
else include($notfound_page);
