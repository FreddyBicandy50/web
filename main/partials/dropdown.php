<!-- INCLUDE -->
<style><?= include 'main/css/style.css'?></style>

<!-- DROPDOWN -->
<div class="dropdown">
  
  <a href="">
<?php
    #localhost
    if ($_SERVER[$Name] == $SERVER_Testing) {
      print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         localhost
         </p></a>");
      print("
         <p id='arrow' class='font-bold tracking-tight sm:text-5xl' style='margin-top: -45px; margin-left:150px;width:3%'>→</p>
         <a href='/console'>
         <img style='margin-top: -35px; margin-left:200px;width:3%' src='https://www.svgrepo.com/show/504947/termius.svg'/>
          <p id='console' class='font-bold tracking-tight sm:text-1xl' style='margin-top: -29px; margin-left:231px;width:3%'>
            (<i>console</i>)
          </p>         
         </a> 
      </a>");
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$SERVER_Production' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Public_hosting</a>
              <a href='$SERVER_Online' style='color:#10B981' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Web_hosting</a>
        </div>");
     
     
    }
    #Public Hosting
    else if ($_SERVER[$Name] == $SERVER_Production) {
      print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         Public_hosting
         </p></a>");
      print("
         <p id='Title' class='font-bold tracking-tight sm:text-5xl' style='color:#1d2033; margin-top: -45px; margin-left:220px;width:3%'>→</p>
         <a href='/console'>
         <img style='margin-top: -35px; margin-left:265px;width:3%' src='https://www.svgrepo.com/show/504947/termius.svg'/>
          <p class='font-bold tracking-tight text-gray-500 sm:text-1xl' style='color:#1d2033; margin-top: -29px; margin-left:300px;width:3%'>(<i>console</i>)</p>         
         </a>
      </a>");
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$SERVER_Testing' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
              <a href='$SERVER_Online' style='color:#10B981' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Web_hosting</a>
        </div>");
     
    }
    #Web Hosting      
    else {
       print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         Web_hosting
         </p></a>");
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$SERVER_Production' style='color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Public_hosting</a>
              <a href='http://$SERVER_Testing' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
        </div>");
    }
    ?>
  </a>
</div>
