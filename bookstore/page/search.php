<?php
// Require the header.php file to include the common header content
require("bookstore/partials/template.php");
 
?>

<main>
  <!-- Main content section -->
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Display a table using data fetched from the database -->
    <table>
      <?php
      // Include the fetch_database.php file to fetch data from the database
      if (URL($bookstore_search)) {
        print(
          "<h1 style='margin-top:20%'  align=center id='main_title' class='text-4xl font-bold text-gray-600 tracking-tight sm:text-6xl'>
                  Search a book
              </h1>

            <p style='margin-left:35%' class='mt-6 text-lg leading-8 text-gray-400'>
                <i>/?request=[Name,Author,Publish_Date]=`value`</i>
            </p>
            ");
      }
      require("bookstore/function/fetch_database.php");

      ?>
    </table>
  </div>
</main>
</div>