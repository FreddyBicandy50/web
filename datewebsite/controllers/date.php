<?php
if ($Device == "iPhone" || $Device == "Linux") {
    require($notfound_page);
} else {
    require("datewebsite/pages/date.php");
}