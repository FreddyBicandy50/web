<?php
require("datewebsite/partials/vars.php");
# Date me Website
if (URL($dateme_main))
    # gowme
    die(require("datewebsite/page/date.php"));
else if (URL($dateme_yes)) {
    # YES
    $yesCount = isset($_POST['yesCount']) ? $_POST['yesCount'] : null;
    $noCount = isset($_POST['noCount']) ? $_POST['noCount'] : null;
    // Print the values for testing purposes
    die(require("datewebsite/page/yes.php"));
}
