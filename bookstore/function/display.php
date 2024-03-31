<?php

function display($row){
    $counter = 0;
    foreach ($row as $book) {
        if ($counter == 0) echo "<tr>";
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
        $counter++;
        // Check if the counter reaches 3 and end the table row
        if ($counter == 3) {
            $counter = 0;
            echo "</tr>";
        }
    }
}

function label($message="Nothing Found")
{
    print(
        "<h1 style='margin-top:20%'  align=center id='main_title' class='text-4xl font-bold text-gray-600 tracking-tight sm:text-6xl'>
                  $message
              </h1>
            <p style='margin-left:35%' class='mt-6 text-lg leading-8 text-gray-400'>
                <i>/?request=[Name,Author,Publish_Date]=`value`</i>
            </p>
            ");
}