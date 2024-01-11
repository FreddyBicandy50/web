 <!DOCTYPE html>
 <html>
<?php include("database.php");?>
 <body bgcolor="#151e27">
     
     <?php
        $db = new test_db('test', true); 
        $connection = $db->connect();
        $query = 'SELECT * FROM Books;';
        $result = $db->query($connection, $query);
        
        while ($book = mysqli_fetch_assoc($result)) {
            echo "<p style='color:#eeeeee'>{$book['Name']}<br></p>" ;
        } 
    ?> 
</body>

 </html>