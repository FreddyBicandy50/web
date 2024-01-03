<!DOCTYPE html>
<html lang="en">

<head>
    <title>🥹</title>
    <style>
        <?php include("datewebsite/css/style.css") ?>
    </style>

</head>

<body>

    <div class="container">
        <div>
            <h1 class="header_text">Do you wanna go out with me?</h1>
        </div>
        <div class="gif_container">
            <img src='<?= $giffy ?>' alt="Cute animated illustration">
        </div>
        <div class="buttons">
            <button class="btn" id="yesButton" onclick="nextPage()">Yes💘</button>
            <button class="btn" id="noButton" onmouseover="moveButton()">No🥺</button>
            <script>
                <?php include("datewebsite/js/function.js") ?>
            </script>
        </div>
    </div>

</body>

</html>