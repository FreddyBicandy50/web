<?php


# BookStore
#MAIN
if (URL('/bookstore/')) {
     #route /bookstore/ -> /?request=1
     $url = explode("?", $route_bookstore_main);
     $url[1] = '?' . $url[1];
     echo "<script>location.href='$url[1]';</script>";
} else if (URL($route_bookstore_main))
     # load the Library page
     die(require("bookstore/controllers/library.php"));

#SEARCH
else if (URL('/bookstore/search')) {
     #route /bookstore/ -> /?request=
     $url = explode("?", $route_bookstore_search);
     $url[1] = $_SERVER[$URI] . '/?' . $url[1];
     echo "<script>location.href='$url[1]';</script>";
} else if (URL($route_bookstore_search . $_GET['request']))
     # load the search page
     die(require("bookstore/controllers/search.php"));
else if (URL($route_bookstore_about))
     # About
     die(require("bookstore/controllers/about.php"));
