<!-- INCLUDE -->
<style><?= include 'main/css/style.css'?></style>
<script>
          <?= include("main/js/theme.js"); ?>
</script>
<!-- DROPDOWN -->
<div class="dropdown">
  
  <a href="" >
<?php
    #localhost
    if ($_SERVER[$Name] == $SERVER_Testing) {
      print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         localhost
         </p></a>");
      print("
         <a href='/console'>
         <img style='margin-top: -3%; margin-left:150px;width:3%' src='https://www.svgrepo.com/show/504947/termius.svg'/>
          <p id='console' class='font-bold tracking-tight sm:text-1xl' style='margin-top: -3%; margin-left:19%;width:3%'>
            (<i>console</i>)
          </p>         
         </a> 
      </a>");
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$SERVER_Production' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Private Site</a>
              <a href='$SERVER_Online' style='color:#10B981' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Website</a>
        </div>");
     
     
    }
    #Public Hosting
    else if ($_SERVER[$Name] == $SERVER_Production) {
       print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         Private Site
         </p></a>");
      print("
         <a href='/console'>
         <img style='margin-top: -3%; margin-left:180px;width:3%' src='https://www.svgrepo.com/show/504947/termius.svg'/>
          <p id='console' class='font-bold tracking-tight sm:text-1xl' style='margin-top: -3%; margin-left:210px;width:3%'>
            (<i>console</i>)
          </p>         
         </a> 
      </a>");
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$SERVER_Testing' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
              <a href='$SERVER_Online' style='color:#10B981' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Website</a>
        </div>");
     
    }
    #Web Hosting      
    else {
       print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         Website
         </p></a>");
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$SERVER_Production'style=color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Private site</a>
              <a href='http://$SERVER_Testing' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
        </div>");
    }
    ?>
  </a>
</div>
