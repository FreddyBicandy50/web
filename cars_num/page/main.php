<?php
require('cars_num/partials/template.php');
require('cars_num/function/display.php');
?>

<section class='flex flex-col antialiased bg-gray-100 text-gray-600 min-h-screen p-4'>
    <?php
    print("request:{$_POST['plate']}");
    if (!empty($_POST['plate'])) {
        require("cars_num/database/connection.php");
        $query = "SELECT * from cars_NB WHERE ActualNB='{$_POST['plate']}'";
        $result = $db->query($connection, $query);
        while ($info = mysqli_fetch_assoc($result)) {
            $_SESSION['Cache'] = $info;
            $_SESSION['info'] = $info;
            $array = $info;
        }
    } else if ($_SESSION['Cache'] && $_SESSION['info']['ActualNB'] == $_POST['plate']) {
        $array = $_SESSION['info'];
    }else{
        header('location:/plate');
        exit();
    }
    display($array);

    ?>
</section>