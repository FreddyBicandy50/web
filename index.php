<?php
echo "Features deleted";
require("main/env/env.php");
require("main/functions/fetch_agent.php");
require("main/functions/fetch_URI.php");
#MAIN PAGE
if ($_SERVER[$URI] == '/' || $_SERVER[$URI] == '/?i=1') require($main_page);


#Webconsole
else if ($_SERVER[$URI] == $route_webconsole) require("webconsole/webconsole.php");



#BookStore
else if ($_SERVER[$URI] == $route_bookstore_main)
     #Library
     require("bookstore/controllers/library.php");

else if ($_SERVER[$URI] == $route_bookstore_filter)
     #Filter
     require("bookstore/controllers/filter.php");
else if ($_SERVER[$URI] == $route_bookstore_about)
     #About
     require("bookstore/controllers/about.php");




#Date me Website
else if ($_SERVER[$URI] == $route_dateme_main)
     #gowme
     require("datewebsite/controllers/date.php");
else if ($_SERVER[$URI] == $route_dateme_yes)
     #YES
     require("datewebsite/controllers/yes.php");






#Not Found 404!
else include($notfound_page);
