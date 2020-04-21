<?php
    // Starten van de sessie
    session_start();

    // Tonen van gegevens uit de sessie
    echo($_SESSION["username"]);

?>
