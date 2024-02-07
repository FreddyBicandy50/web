<?php

require("bookstore/partials/variables.php");
# BookStore
$url = explode("?", $_SERVER[$URI]);
$url[1] = '?' . $url[1];

#MAIN
if (URL($bookstore) || URL($bookstore . $url[1])) {
     #route /bookstore/ -> /?request=1
     if (URL($bookstore)) {
          echo "<script>location.href='$url[1]';</script>";
     }
     die(require("bookstore/page/library.php"));
}

#SEARCH
else if (URL('/bookstore/search')) {
     #route /bookstore/ -> /?request=
     $url = explode("?", $bookstore_search);
     $url[1] = $_SERVER[$URI] . '/?' . $url[1];
     echo "<script>location.href='$url[1]';</script>";
} else if (URL($bookstore_search . $_GET['request']))
     # load the search page
     die(require("bookstore/page/search.php"));
else if (URL($bookstore_about))
     # About
     die(require("bookstore/page/about.php"));
