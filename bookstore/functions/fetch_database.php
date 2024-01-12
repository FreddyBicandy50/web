<?php
// rebase
// Require the books_db.php file for database connectivity
require("bookstore/partials/books_db.php");

// Function to display book information in a table cell
function display($book)
{
    print("
        <td>
            <a href={$book['Link']} target='_blank'>
                <img src='{$book['Image']}' alt='image book for={$book['Name']}' width='250' height='300'>
            </a>
            <b>Publish Date:</b>{$book['Publish_Date']}<br> 
            <b>Author:</b>{$book['Author']}<br> 
            <b>Page:</b>{$book['Page']}<br> 
        </td>
    ");
}

// Initialize a counter for table cell alignment
$counter = 0;

if (mysqli_num_rows($result)<1) {
    print(
        "<h1 style='margin-top:20%'  align=center id='main_title' class='text-4xl font-bold text-gray-600 tracking-tight sm:text-6xl'>
                  Not Found
              </h1>

            <p style='margin-left:35%' class='mt-6 text-lg leading-8 text-gray-400'>
                <i>/?request=[Name,Author,Publish_Date]=`value`</i>
            </p>
            ");
} else {
    // Loop through the result set of books
    while ($book = mysqli_fetch_assoc($result)) {
        // Check if the counter is zero and start a new table row
        if ($counter == 0) echo "<tr>";
        // Check the current URI to determine whether to display the book
        display($book);
        $counter++;
        // Check if the counter reaches 3 and end the table row
        if ($counter == 3) {
            $counter = 0;
            echo "</tr>";
        }
    }
}
