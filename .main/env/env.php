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
$connect = 'main/database/connect.php';
$giffy = "https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExcDdtZ2JiZDR0a3lvMWF4OG8yc3p6Ymdvd3g2d245amdveDhyYmx6eCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/cLS1cfxvGOPVpf9g3y/giphy.gif";



#Main Pages 
$main_page = ".main/pages/main.php";
$menu_dropdown = ".main/pages/dropdown.php";
$console_page = "webconsole/webconsole.php";
$notfound_page = ".main/pages/404.php";

#LINKS
$logo_theme = "https://raw.githubusercontent.com/FreddyBicandy50/web/features/main/img/theme.png";
$logo_web = "https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500";
$logo_profile = "https://avatars.githubusercontent.com/u/79138306?v=4";
$css_tailwind = "https://cdn.tailwindcss.com";
$server_local = "kali-wsl.tail4bb6a.ts.net";
$server_private = "raspberrypi.tail4bb6a.ts.net";
$server_public = "bicandy-new.42web.io";

$project_date_website = "datewebsite/";
$project_webconsole = "webconsole/";


#test
$testing_pool = "/test/";

#webconsole
$route_webconsole = '/console';
