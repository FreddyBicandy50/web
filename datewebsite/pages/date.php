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
         <!-- ... (your existing HTML) ... -->

<script>
    let yes = 0;
    let no = 0;

    function nextPage() {
        yes = yes + 1;
        // Send values to server using AJAX
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Handle the response from the server if needed
            }
        };

        xhttp.open("GET", "datewebsite/functions/your_php_file.php?yes=" + yes + "&no=" + no, true);
        xhttp.send();

        // Redirect to the next page
        window.location.href = "/SHESAIDYESS!";
       
    }

    function moveButton() {
        var x =
            Math.random() *
            (window.innerWidth - document.getElementById("noButton").offsetWidth) -
            85;
        var y =
            Math.random() *
            (window.innerHeight - document.getElementById("noButton").offsetHeight) -
            48;
        document.getElementById("noButton").style.left = `${x}px`;
        document.getElementById("noButton").style.top = `${y}px`;
        no = no + 1;
        console.log(no);
    }
</script> 

        </div>
    </div>

</body>

</html>