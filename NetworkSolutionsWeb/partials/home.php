<!DOCTYPE html>
<html lang="en">

<head>

    <title> Home page </title>

    <!--CSS Rule-->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Style-->
    <style>
        <?php include("NetworkSolutionsWeb/CSS/header.css") ?>
    </style>
    <style>
        <?php include("NetworkSolutionsWeb/CSS/home.css") ?>
    </style>
    <style>
        <?php include("NetworkSolutionsWeb/CSS/slider.css") ?>
    </style>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <!--Java Script-->
    <script>
        <?php include("NetworkSolutionsWeb/JS/script.js") ?>
    </script>
    <script>
        <?php include("NetworkSolutionsWeb/JS/slider.js") ?>
    </script>

</head>

<body>
<!--Page Header-->
<div data-aos-delay="500" data-aos="fade-down" id="header">
    <div id="headinside">
        <div data-aos="fade-left" class="dropdown" data-dropdown>
            <a id="contact" href="tel:+96179131124" Style="right: 10px;">Call Now+96179131124</a>
            <!--DROP-DOWN MENU -->
            <button class="dropdown_button" data-dropdown-button>
                <b class="dropdown_button" data-dropdown-button>My Account ▼</b></button>
            <div class="dropdown_menu">
                <!--LOGIN FORM -->
                <form method="post"
                      action="NetworkSolutionsWeb/php/login.php">
                    <div class="input-box">
                        <input class="user_pswd" type="text" name="user_name" placeholder=" " required/>
                        <label>
                            <h5>Username</h5>
                        </label>
                    </div>
                    <div class="input-box">
                        <input class="user_pswd" type="password" name="pwd" placeholder=" " required/>
                        <label>
                            <h5>Password</h5>
                        </label>
                    </div>
                    <input style="border: 0.3rem  ;" class="login_btn" type="submit" value="LOGIN" required/>
                    <a
                            href="Contact.php">
                        <font size=2><br><br>forgot password?</font>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Main Navigation bar -->
<div id="navbar">
    <img data-aos="fade-right" id="Logo"
         src="https://github.com/FreddyBicandy50/Projects/blob/main/NetworkSolutionsWeb%20/img/logo.png?raw=true"
         alt="logo"></img>
    <div id="navinside">
        <a class="nav_btn"
           href="Shop.php">
            <h3 data-aos-delay="500" data-aos="fade-down" id="Shop">Shop</h3>
        </a>
        <a class="nav_btn"
           href="Contact.php">
            <h3 data-aos-delay="500" data-aos="fade-down" id="Contact">Contact</h3>
        </a>
        <a class="nav_btn"
           href="">
            <h3 data-aos-delay="500" data-aos="fade-down" id="About">About</h3>
        </a>
    </div>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides">
        <img style="opacity: 0.8;"
             src="https://github.com/FreddyBicandy50/Projects/blob/main/NetworkSolutionsWeb%20/img/imageslider1.jpeg?raw=true"
             alt="image slider 1">
        <h1>
            <marquee data-aos-delay="1500" data-aos="fade-up" scrollamount="20" behavior="slide" direction="up">Join
                Bicandy Network Solutions today <br> for the
                Best Quality Internet Experience
            </marquee>
        </h1>
    </div>

    <div class="mySlides" data-interval="1000">
        <img style="opacity: 0.6"
             src="https://github.com/FreddyBicandy50/Projects/blob/main/NetworkSolutionsWeb%20/img/imageslider2.jpeg?raw=true"
             alt="image slider 2">

    </div>

    <div class="mySlides">
        <img style="opacity: 0.6"
             src="https://github.com/FreddyBicandy50/Projects/blob/main/NetworkSolutionsWeb%20/img/imageslider3.jpeg?raw=true"
             alt="image slider 3">

    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div style="position:absolute;margin-top: -25%;margin-left: 45%;">

        <!-- The dots/circles -->
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>
<br>


<!-- Black Container -->
<div id="theme1">

    <!-- Service Details  1-->
    <div data-aos="fade-up" id="Corporate_box">
        <!-- Service icon -->
        <image src="img/server.png" class="center_icon" alt="server  icon"></image>

        <!-- Service Text -->
        <h3 align="center">Corporate Service</h3>
        <br>
        <p align="center">
            <font size="3px" ;face="arial">Dedicated connectivity with high availability is <br> designed for all
                business users.</font>
        </p>

    </div>

    <!-- Service Details 2-->
    <div data-aos="fade-up" id="Residantal_box">
        <!-- Service icon -->
        <image src="img/download.png"
               class="center_icon" alt="service icon"></image>

        <!-- Service Text -->
        <h3 align="center">Residential Service</h3>
        <br>
        <p align="center">
            <font size="3px" ;face="arial">Plans are available to meet every ones need. Check <br>our available
                packages which includes<br>residential/gaming DSL.</font>
        </p>

    </div>

    <!-- Service Details 3-->
    <div data-aos="fade-up" id="Fiber_box">
        <!-- Service icon -->
        <image src="img/fiber.png"
               class="center_icon" alt="fiber icon"></image>

        <!-- Service Text -->
        <h3 align="center">Fiber</h3>
        <br>
        <p align="center">
            <font size="3px" ;face="arial">With BNS get ultrahigh speed internet <br>service. Contact us
                to check availability in your area.</font>
        </p>
    </div>

    <!-- Service Details 4-->
    <div data-aos="fade-up" id="support_box">
        <!-- Service icon -->
        <image src="img/customer.png"
               class="center_icon" alt="customer support icon"></image>

        <!-- Service Text -->
        <h3 align="center">24/7 Customer Support</h3>
        <br>
        <p align="center">
            <font size="3px" ;face="arial">Dedicated team of professionals providing a round<br>-clock exceptional
                client support.</font>
        </p>
    </div>


    <!-- Company Description area -->
    <div data-aos="fade-up" id="Service_details_box">
        <!-- HEADER TEXT -->
        <h1 align="center">
            <font size="14" color="white">We are the no.1 Quality service <br> provider company in the Country</font>
        </h1>
        <!-- DESCRIPTION TEXT -->
        <p data-aos="fade-up" align="center">
            <font size="4px" color="white">
                <br>
                Bicandy's Network Solutions is dedicated in providing high quality services to professionals with <br>
                delicate
                needs In the Business,
                Gaming and Residential sectors. We do not only <br> focus on the mass coverage of the basic market
                needs, we also integrate
                our <br> services to meet higher standards of quality required by users with a more <br> specialized
                need in their business
                nature.The end result is an experience that <br> combines creativity, unique quality of service and
                an exceptional after
                sales<br> support.
            </font>
        </p>
    </div>
</div>


<!-- Available services area-->
<div id="available_Sevices">
    <!-- TEXT HEADING -->
    <h1 data-aos="fade-up" style="position:absolute;color:white; margin-left:40%;margin-top:5%">Services We
        Provide </h1>
    <p data-aos="fade-up" style="position:absolute;color:white; margin-left:38%;margin-top:8%">Choose from below the
        service that best fits your needs</p>

    <!-- Services Img -->
    <image class="serviceimg_center" src="img/services.png"></image>
</div>


<!-- Plans area -->
<div data-aos="fade-up" id="plans_box">
    <!-- Plans img -->
    <image class="plansimage" src="img/plans.png">
        <!-- Order Page -->
        <a style="text-decoration:none" href="php/Inquire.php">
            <!-- Plan Order Button -->
            <div class="btn_position1">
                <p align="center"> Order This Plan </p>
            </div>
        </a>

        <!-- Order Page -->
        <a style="text-decoration:none" href="php/Inquire.php">
            <!-- Plan Order Button -->
            <div class="btn_position2">
                <p align="center"><font color="blue;">Order This Plan</font></p>
            </div>
        </a>

        <!-- Order Page -->
        <a style="text-decoration:none" href="php/Inquire.php">
            <!-- Plan Order Button -->
            <div class="btn_position3">
                <p align="center"> Order This Plan </p>
            </div>
        </a>
    </image>
</div>

<!-- Plans policy -->
<div id="white">
    <!-- policy Img -->
    <image data-aos="fade-up" class="includeimage" src="img/include.png"></image>
</div>

<!-- Animation Script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>


</body>
</html>