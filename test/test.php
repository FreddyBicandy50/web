 <!DOCTYPE html>
 <html>

 <body bgcolor="#151e27">
     
     <?php
        $db = new Database();
        $connection = $db->connect('test', true);
        $query = 'SELECT * FROM Books;';
        $result = $db->query($connection, $query);

        while ($book = mysqli_fetch_assoc($result)) {
            echo "<p style='color:#eeeeee'>{$book['Name']}<br></p>" ;
        }
        
    ?> 
</body>

 </html>