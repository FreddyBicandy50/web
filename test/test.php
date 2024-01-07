<?php



$db = new Database();
$connection = $db->connect('test', true);
$query='SELECT * FROM Books;';
$result = $db->query($connection,$query);

while ($book = mysqli_fetch_assoc($result)) {
    echo $book['Name'];
}

echo "test";
