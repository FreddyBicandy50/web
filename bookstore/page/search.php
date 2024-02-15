<?php
// Require the header.php file to include the common header content
require("bookstore/partials/template.php");
require("bookstore/function/display.php");


?>

<main>
  <!-- Main content section -->
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Display a table using data fetched from the database -->
    <table>
      <?php
      // Include the fetch_database.php file to fetch data from the database
      if (URL($bookstore_search)) {
        label("Search book");
      } else {

        require("bookstore/database/connection.php");
        require(".main/database/fetch.php");
        $row = fetch($result);
        if (!$row) label("Not found");
        else display($row, $book);
        
      }
      ?>
    </table>
  </div>
</main>
</div>