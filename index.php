<?php

require("main/env/env.php");

#MAIN PAGE
if ($_SERVER[$URI] == '/' || $_SERVER[$URI] == '?i=1') require($Main_Page);
#Webconsole
else if ($_SERVER[$URI] == '/console') require("webconsole/webconsole.php");
#BookStore
else if ($_SERVER[$URI] == $Route_bookstore_main)
     #Library
     require($Controller_BookStore."library.php");
     else if ($_SERVER[$URI] == $Route_bookstore_filter)
     #Filter
     require($Controller_BookStore."filter.php");
else if ($_SERVER[$URI] == $Route_bookstore_about)
     #About
     require($Controller_BookStore."about.php");


#Date me Website
else if ($_SERVER[$URI] == $Route_dateme_main)
     #gowme
     require($Controller_date_website."date.php");
else if ($_SERVER[$URI] == $Route_dateme_yes)
     #YES
     require($Controller_date_website."yes.php");

#Not Found 404!
else include($NotFound_Page);
