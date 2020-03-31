<?php
// /aanmaken functions

// Controlleer de fullName uit de $_POST
function checkFullName() {
    if(($_POST["fullName"]) < 3 ) {
        echo("<p style='red'>Te weinig karakters</p>");
    }

    if(strpos($_POST["fullName"], " ") == -1) {
        echo("<p style=red>Geen spatie gebruikt</p>");
    }

    echo($_POST["fullName"]);
}
?>
