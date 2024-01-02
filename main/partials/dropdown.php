<!-- INCLUDE -->
<style>
  <?= include 'main/css/style.css'; ?>
</style>
<script>
  <?= include 'main/js/dropdown.js'; ?>
</script>

<!-- DROPDOWN -->
<div class="dropdown">
  
  <a href="" onclick="myFunction()" style="margin-left:20px;color:#7a7df3 " class="font-bold tracking-tight text-gray-500 sm:text-3xl">
    <?php
    #localhost
    if ($_SERVER[$Name] == $SERVER_Testing) {
      print('localhost</a>');
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$SERVER_Production' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>VPN Host</a>
              <a href='$SERVER_Online' style='color:#10B981' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Web Hosting</a>
        </div>");
    }
    #Production
    else if ($_SERVER[$Name] == $SERVER_Production) {
      print('VPN Host</a>');
      print(
        "<div id='myDropdown' class='dropdown-content'>
        <a href='http://$SERVER_Testing' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
        <a href='$SERVER_Online' style='color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>Web Hosting</a>
        </div>");
    }
    #Web Hosting      
    else {
      print('Web Hosting</a>');
      print(
        "<div id='myDropdown' class='dropdown-content'>
              <a href='http://$Server_Production' style='color:#10B981 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>VPN Host</a>
              <a href='http://$SERVER_Testing' style='color:#F87171 ' class='font-bold tracking-tight text-gray-500 sm:text-2xl'>localhost</a>
        </div>");
    }
    ?>
  </a>
</div>