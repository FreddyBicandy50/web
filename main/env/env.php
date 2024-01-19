<?php

#Variables
// Start a session to store user information
session_start();
// Set the session variable 'username' to the session ID
$_SESSION['username'] = session_id();
// Get the user agent string from the HTTP headers
$user = $_SERVER["HTTP_USER_AGENT"];
$noCount = 0;
$yesCount = 0;
$name = 'SERVER_NAME';
$user = $_SERVER["HTTP_USER_AGENT"];
$URI = 'REQUEST_URI';
$giffy = "https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExcDdtZ2JiZDR0a3lvMWF4OG8yc3p6Ymdvd3g2d245amdveDhyYmx6eCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/cLS1cfxvGOPVpf9g3y/giphy.gif";



#Main Pages 
$main_page = "main/pages/main.php";
$menu_dropdown = "main/pages/dropdown.php";
$console_page = "webconsole/webconsole.php";
$notfound_page = "main/pages/404.php";

#LINKS
$logo_theme = "https://raw.githubusercontent.com/FreddyBicandy50/web/features/main/img/theme.png";
$logo_web = "https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500";
$logo_profile = "https://avatars.githubusercontent.com/u/79138306?v=4";
$css_tailwind = "https://cdn.tailwindcss.com";
$server_local =["kali-wsl.tail4bb6a.ts.net",'localhost'];
$server_private = ["raspberrypi.tail4bb6a.ts.net", '192.168.0.109'];
$server_public = "https://freddybicandy.42web.io/";

#Projects
$project_bookstore = "bookstore/";
$project_date_website = "datewebsite/";
$project_webconsole = "webconsole/";

#Routes
#test
$testing_pool = "/test/";


#bookstore
$route_bookstore_main = '/bookstore/?request=1';
$route_bookstore_search = '/bookstore/search/?request=';
$route_bookstore_about = '/bookstore/about';


#date me
$route_dateme_main = '/gowme/';
$route_dateme_yes = '/SHESAIDYESS!';

#webconsole
$route_webconsole = '/console';

