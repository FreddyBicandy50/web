<?php
#Variables
$Name = 'SERVER_NAME';
$URI = 'REQUEST_URI';
$user = $_SERVER["HTTP_USER_AGENT"];

#Encapsulation 
$Main_Page = "main/pages/main.php";
$Menu_Dropdown = "main/partials/dropdown.php";
$NotFound_Page = "main/pages/404.php";

#LINKS
$LOGO_lightTheme = "https://raw.githubusercontent.com/FreddyBicandy50/web/features/main/img/light_theme.png";
$LOGO_Profile = "https://avatars.githubusercontent.com/u/79138306?v=4";
$CSS_Tailwind = "https://cdn.tailwindcss.com";
$SERVER_Testing = "kali-wsl.tail4bb6a.ts.net";
$SERVER_Production = "http://raspberrypi.tail4bb6a.ts.net";
$SERVER_Online = "https://freddybicandy.42web.io/";

#Projects
$Project_bookstore = "bookstore/";
$Project_date_website = "datewebsite/";

#Routes
#bookstore
$Route_bookstore_main = '/bookstore/';
$Route_bookstore_filter = '/bookstore/filter';
$Route_bookstore_about = '/bookstore/about';
#pages
$Route_dateme_main = '/gowme/';
$Route_dateme_yes = '/SHESAIDYESS!';

#Directories
#bookstore
$Controller_BookStore = $Project_bookstore . "controllers/";
$function_BookStore = $Project_bookstore . "functions/";
$Pages_BookStore = $Project_bookstore . "pages/";
$Partials_BookStore = $Project_bookstore . "partials/";

#date_website
$Controller_date_website = $Project_date_website . "controllers/";
$function_date_website = $Project_date_website . "functions/";
