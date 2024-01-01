    <style>
      .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      /* Dropdown button on hover & focus */
      .dropbtn:hover,
      .dropbtn:focus {
        background-color: #2980B9;
      }

      /* The container <div> - needed to position the dropdown content */
      .dropdown {
        position: relative;
        display: inline-block;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        transform: rotateX(90deg);
        transform-origin: top;
        transition: transform 0.3s ease;
        position: absolute;
        background-color: transparent;
        min-width: 160px;
        box-shadow: 12px 10px 12px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        visibility: hidden;
        opacity: 0;
      }

      /* Links inside the dropdown */
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {
        background-color: #ddd;
      }

      /* Show the dropdown menu with rotation animation on hover */
      .dropdown:hover .dropdown-content {
        transform: rotateX(0deg);
        visibility: visible;
        opacity: 1;
      }
    </style>
    
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