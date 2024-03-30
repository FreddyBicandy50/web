<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>09/13/23❤️‍🔥</title>
    <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>"/>
    <style>
        <?= include 'twinflame/style/style.css' ?>
    </style>
    <script>
        <?= include 'twinflame/js/counter.js' ?>
    </script>
    <script>
        <?= include 'twinflame/js/confetti.js' ?>
    </script>

</head>
<?php
$today = date('Y/m/d');

$confetti = '';
if ($today == '2024/04/13') $confetti = 'startConfetti()';
?>

<body <?= "onload='$confetti'" ?>>

<?php
$color = "#000000"
?>
<!-- Inside the text-center div -->
<div style="margin-top:0%">
    <h3 style="font-family:Arial,sans-serif;color:<?= $color ?>"><b>♥ In love for ♥</b></h3>
    <div style="font-family: Arial,sans-serif;font-size:3.5em;color:<?= $color ?>" id="months-section"><b>0 months</b>
    </div>
    <h1>OR</h1>
    <div style="font-family:Arial,sans-serif;font-size:3.5em;color:<?= $color ?>" id="days-section"><b>0 days</b></div>
    <div style="font-family:Arial,sans-serif;font-size:3.5em;color:<?= $color ?>" id="hours-section"><b>0 hours</b>
    </div>
    <div style="font-family:Arial,sans-serif;font-size:3.5em;color:<?= $color ?>" id="minutes-section"><b>0 minutes</b>
    </div>
    <div style="font-family:Arial,sans-serif;font-size:3.5em;color:<?= $color ?>" id="seconds-section"><b>0 seconds</b>
    </div>

</div>
<div class="text-center">

    <div align="center" style="margin-top:0" class="heart-rate">
        <h3 style="color:<?= $color ?>" id="main_title">
            كُولُوسِّي:<br><i>16:3-24</i>
        </h3>
        <div class="fade-in"></div>
        <div class="fade-out"></div>
    </div>
</body>