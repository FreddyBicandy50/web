<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Set the title of the HTML page to a face emoji -->
    <title>🥹</title>
    <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />

    <!-- Include external CSS file for styling -->
    <style>
        <?php include("datewebsite/css/style.css") ?>
    </style>

</head>

<body>

    <!-- Container for the content of the page -->
    <div class="container">
        <!-- Heading section with an invitation message -->
        <div>
            <h1 class="header_text">Do you wanna go out with me?</h1>
        </div>

        <!-- Container for a dynamic GIF illustration with a PHP variable -->
        <div class="gif_container">
            <img src='<?= $giffy ?>' alt="Cute animated illustration">
        </div>

        <!-- Container for buttons (Yes and No) -->
        <div class="buttons">
            <!-- Yes button triggering a JavaScript function -->
            <button class="btn" id="yesButton" onclick="nextPage()">Yes💘</button>

            <!-- No button with a mouseover event triggering a JavaScript function -->
            <button class="btn" id="noButton" onmouseover="moveButton()">No🥺</button>

            <!-- Include external JavaScript file for additional functionality -->
            <script>
                <?php include("datewebsite/js/function.js") ?>
            </script>
        </div>
    </div>

</body>

</html>