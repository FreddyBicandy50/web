<?php
// Require the header.php file to include the common header content
require("bookstore/partials/template.php");
?>
<main>
  <!-- Main content section -->
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <!-- Display a table using data fetched from the database -->
    <table>
      <?php
      require("bookstore/database/connection.php");
      // Include the fetch_database.php file to fetch data from the database
      require(".main/database/fetch.php");
      require("bookstore/function/display.php");
      $row = fetch($result);
      if(!$row){
        label();
      }else{
        display($row);

      }

      

      ?>
    </table>
  </div>
</main>
</div>