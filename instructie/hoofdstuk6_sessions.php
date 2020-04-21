<?php
    // PHP Session voorbeeld

    // Sessie starten
    session_start();

    // Session vullen met data
    $_SESSION["username"] = "Admin";
    if(isset($_GET["txtUsername"]) == true) {
        $_SESSION["username"] = $_GET["txtUsername"];
    }
?>

<html>
<head>
<body>
<form method="get" action="#">
    <input type="text" name="txtUsername">
    <input value="Verzenden" type="submit">
</form>
</body>
</head>
</html>
