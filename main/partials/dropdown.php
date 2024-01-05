<!-- INCLUDE -->
<!-- Include external CSS file -->

<style>
  <?= include 'main/css/style.css' ?>
</style>

<!-- Include external JavaScript file for theme functionality -->
<script>
  <?= include("main/js/theme.js"); ?>
</script>

<!-- DROPDOWN -->
<!-- Dropdown container -->
<div class="dropdown">
  <!-- Dropdown Trigger -->
  <a href="">
    <?php
    # Check the server environment and set content accordingly
    # Localhost
    if ($_SERVER[$name] == $server_local) {
      #main options
      print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         localhost
         </p></a>");
      #other options
      print("
         <a href='/console'>");
      if($Device=='iPhone' || $Device=='Linux') {
        echo'';
      }else{
      print("
              <img style='margin-top: -3%; margin-left:150px;width:3%' src='https://www.svgrepo.com/show/504947/termius.svg'/>
                ");
               
      }
         print("<p id='console' class='font-bold tracking-tight sm:text-1xl' style='margin-top: -3%; margin-left:19%;width:3%'>
                  (<i>console</i>)
                </p>         
              </a> 
            </a>");
            print(
              "<div id='myDropdown' class='dropdown-content'>
                    <a href='http://$server_private' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Private Site</a>
                    <a href='$server_public' style='color:#10B981' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Website</a>
              </div>");
    }


    # Private Hosting
    else if ($_SERVER[$name] == $server_private) {
      #main options
      print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         Private Site
         </p></a>");
      #other options   
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
              <a href='http://$server_local' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
              <a href='$server_public' style='color:#10B981' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Website</a>
        </div>");
    }


    # Web Hosting      
    else {
      #main options
      print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         Website
         </p></a>");
      #other options
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$server_private' style=color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Private site</a>
              <a href='http://$server_local' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
        </div>");
    }
    ?>
  </a>
</div>