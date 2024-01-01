<link rel="stylesheet" src="style.css">    
<script>
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};
</script>
<div class="dropdown">
  <a href="" onclick="myFunction()" style="margin-left:20px;color:#7a7df3 "
    class="font-bold tracking-tight text-gray-500 sm:text-3xl">
     
    <?php
    #continue 
    if ($_SERVER['SERVER_NAME'] == "kali-wsl.tail4bb6a.ts.net") {
      print(
        'Testing</a>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="bookstore/controllers/" style="color:#f39595 " class="font-bold tracking-tight text-gray-500 sm:text-2xl">Production</a>
                    <a href="https://freddybicandy.42web.io/" style="color:#95f3d0 " class="font-bold tracking-tight text-gray-500 sm:text-2xl">Online</a>
                </div>');
    } else if ($_SERVER['SERVER_NAME'] == "raspberrypi.tail4bb6a.ts.net")
      echo "Production";
    else
      echo "Online Server";
    ?>
  </a>
</div>
<h1><img src="settings/Arrow_down.png"></h1>