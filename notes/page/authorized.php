<?php


if (mysqli_num_rows($result) <= 0) {
    print(
        "<h1 style='margin-top:15%'  align=center id='main_title' class='text-4xl font-bold text-gray-600 tracking-tight sm:text-6xl'>
                  Unauthorized !
              </h1>
        ");
}
