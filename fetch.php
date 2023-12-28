<?php
require("partials/books_db.php"); 
function display($book){ 
    print
            ("
                <td>
                    <a href={$book['Link']} target='_blank'>
                        <img src='{$book['Image']}' alt='image book for={$book['Name']}' width='250' height='300'>
                    </a>
                    <b>Publish Date:</b>{$book['Publish Date']}<br> 
                    <b>Author:</b>{$book['Author']}<br> 
                    <b>Page:</b>{$book['Page']}<br> 
            </td>
            ");
}
$counter=0;

while($book=mysqli_fetch_assoc($result)){
    if($counter==0) echo"<tr>";
    if($_SERVER["REQUEST_URI"]=="/"){
        display($book);
        $counter++;
    }
    else if ($_SERVER["REQUEST_URI"] == "/filter")
        {
            if($book['Author']=="Robert Greene") 
            {
                display($book);
                $counter++;
            }
        }
    if($counter==3) {
        $counter=0;
        echo "</tr>";
    }
}
 

