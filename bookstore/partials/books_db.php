<?php


// Check if the server is local or private, and connect to the corresponding database
if (HTTP($server_local) || HTTP($server_private))
        // Connect to the 'test' database
        $connect = db('test', true);
else
        // Connect to the 'if0_35693876_bookstore' database
        $connect = db('if0_35693876_bookstore', false);




// Check if the connection to the database is successful
if (!$connect)
        // Display an error message and terminate script execution if connection fails
        die("Error connecting to the database: " . mysqli_connect_error());
else
        // Query the 'Books' table and store the result in the $result variable
        $result = mysqli_query($connect, "SELECT * FROM Books;");
