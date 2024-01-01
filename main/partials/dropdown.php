<style><?=include 'main/css/style.css';?></style>
<script><?=include 'main/js/dropdown.js';?></script>
<div class="dropdown">
  <a href="" onclick="myFunction()" style="margin-left:20px;color:#7a7df3 " class="font-bold tracking-tight text-gray-500 sm:text-3xl">
    <?php
    #continue 
    if ($_SERVER[$Name] == $SERVER_Testing) {
      print('Testing</a>');
      print(
        '<div id="myDropdown" class="dropdown-content">
              <a href="http://raspberrypi.tail4bb6a.ts.net/" style="color:#f39595 " class="font-bold tracking-tight text-gray-500 sm:text-2xl">Production</a>
              <a href="https://freddybicandy.42web.io/" style="color:#95f3d0 " class="font-bold tracking-tight text-gray-500 sm:text-2xl">Online</a>
        </div>');
    } else if ($_SERVER['SERVER_NAME'] == "raspberrypi.tail4bb6a.ts.net")
      echo "Production";
    else
      echo "Online Server";
    ?>
  </a>
</div>