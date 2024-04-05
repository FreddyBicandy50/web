<!-- INCLUDE -->
<!-- Include external CSS file -->

<style>
    <?= include '.main/style/style.css' ?>
</style>

<!-- Include external JavaScript file for theme functionality -->
<script>
    <?= include(".main/js/theme.js"); ?>
</script>

<!-- DROPDOWN -->
<!-- Dropdown container -->
<div class="dropdown">
    <!-- Dropdown Trigger -->
    <a href="">

        <?php
        $local = 'localhost';
        $rasbperry = 'Rasbperry';
        $online = 'Website';
        $index;
        # Check the server environment and set content accordingly
        # Localhost
        if (HTTP($server_local)) {
            #main options
            print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
          $local
         </p></a>");
            #other options
            print(
            "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$server_private' style=color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>$rasbperry</a>
              <a href='http://$server_public' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>$online</a>
        </div>");

        } # Private Hosting
        else if (HTTP($server_private)) {
            #main options
            print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         $rasbperry
         </p></a>");
            print(
            "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$server_local' style=color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>$local</a>
              <a href='http://$server_public' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>$online</a>
        </div>");
        } # Web Hosting
        else {
            #main options
            print("
         <p style='margin-left:20px;color:#7a7df3' class='font-bold tracking-tight text-gray-500 sm:text-3xl'>
         $online
         </p></a>");
            #other options
            print(
            "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$server_private' style=color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>$rasbperry</a>
              <a href='http://$server_local' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>$local</a>
        </div>");
        }
        ?>
    </a>
</div>