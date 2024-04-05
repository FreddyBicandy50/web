<!DOCTYPE html>
<html lang="en">

<head>
    <!--CSS Rule-->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contact</title> 
    <!--CSS style-->
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/Contact.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>  
       <!--Contact Page Navigation-->
        <div> 
            <!--About Page TITLE-->
            <h1 data-aos="fade-up" class="center_text">Contact</h1> 
            <!--Home Page Link-->
            <a href="home.phpdex.php">
                <p class="hometext">
                    <img style="width:21%"src="../img/home.png"> home/
                </p>
            </a> 
            <!--Contact Page Link--> 
                <p class="aftershlash" class="cc">
                    <font color="#ff0000">contact</font>
                </p>
            </a> 
            <!--Contact img-->
            <img style="width: 100%;" src="../img/contact.png"></img>
            
        </div>
        
        <!--Contact Form Title-->
        <div data-aos-delay="500" data-aos="fade-up">
            <h1 class="contactus">Contact Us</h1> 
        </div>
        
        <!--Address-->
        <div data-aos="fade-up">
            <!--location-->
            <h3 class="address">Sin el fil highway facing Freeway, Grey Center, 5th floor</h3>
            <br>
            <br> 
            <address>
                <!--number-->
                <a class="numail" href="tel:+96179131124">
                    <font size="4"><b>+961 79131124</b></font>
                </a>
                
                <!--mail-->
                <a style="text-decoration:none" href="../../index.php">
                    <font color="black"><b>info@bns.net</b></font>
                </a>
            </address>
        </div>
        
        <!--call center-->
        <div data-aos="fade-up">
            <table class="list" border="0">
                <tr>

                    <td>
                        <ul style="list-style-type:disc">
                            <li> Administration at ext 0 </li>
                            <li style="padding-top: 5px"> Finance at ext 1 </li>
                            <li style="padding-top: 5px"> Corporate Sales at ext 2 </li>
                        </ul>
                    </td>

                    <td>
                        <ul style="list-style-type:disc">
                            <li>Residential Sales at ext 2</li>
                            <li style="padding-top: 5px"> Gaming Sales at ext 2 </li>
                            <li style="padding-top: 5px"> IPTV Sales at ext 2 </li>
                        </ul>
                    </td>
                    
                    <td valign="top">
                        <ul style="list-style-type:disc">
                            <li>Support at ext 3</li>
                        </ul>
                    </td>

                </tr>
            </table> 
        </div>
        
        <!--Get in touch form-->
        <form class="getintouch" method="post">
            <div data-aos="fade-up">
                <h1 align="center">Get In Touch</h1>
                <table cellspacing="20" class="getintouch_formtable" border="0">
                    <tr>
                        <td>
                            <div data-aos="fade-up">
                                <input class="theme-input-style" type="text" id="fullname" placeholder="Your name" required>
                            </div>
                        </td>
                        <td>
                            <div data-aos="fade-up">
                                <input class="theme-input-style" type="email" id="email" placeholder="E-mail Address" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div data-aos="fade-up">
                                <input class="theme-input-style" type="text" id="phonenumber" placeholder="Telephone" required>
                            </div>
                        </td>
                        <td>
                            <div data-aos="fade-up">
                                <input class="theme-input-style" type="text" id="subject" placeholder="Subject" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div data-aos="fade-up">
                                <textarea class="theme-input-style" style="height:150px; font-family: Arial; padding-top: 13px;"
                                    rows="5" cols="150" style="font-size: 12pt" type="text" id="message"
                                    placeholder="Write your message" spellcheck="false" required></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <button  data-aos="fade-up" type="submit" class="btn" onclick="alert('thank you for you message we will reply to you as soon as possible')">Send Message</button>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
        </form>
        </div>  
        
        
        
        <!-- Available services area--> 
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000
            });
        </script>
</body>

</html>