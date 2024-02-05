<?php
// rebase
// Require the books_db.php file for database connectivity
function fetch($result){
    if (mysqli_num_rows($result) <= 0) {
        return false;
    } else {
        // Loop through the result set of books
        while ($values = mysqli_fetch_assoc($result)) {
            $values_array[]=$values;
        }
    }
    return $values_array;
}
?>