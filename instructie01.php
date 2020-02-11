<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <link href="" rel="stylesheet" type="text/css">
    <script src="" defer></script>
    <title>
        Instructie
    </title>
</head>
<body>
    <?php
    // Variablen:
    // -Strings
    // -Integer
    // -Boolean
    $firstName = "Jarno";
    $lastName = "van der Doelen";
    $fullName = $firstName . " " . $lastName;

    // Integers:
    $yearOfBirth = 1999;
    $currentYear = date("Y");
    $age = $currentYear - $yearOfBirth;

    //Boolean
    $fromMaaskantje = false;
    $isMale = true;

    if($fromMaaskantje == true) {
        if($isMale == true) {
            echo("<p>Wie is hier nou de snackbar</p>");
        } else {
            echo("<p>Jij hebt het verkeerde geslacht</p>");
        }
    } else {
        echo("<p>Jij komt uit een goede buurt</p>");
    }
    ?>
<div>
    <?php
    echo("<h1>Hallo" . " " . $fullName . "</h1>");
    echo("<h2>Jij bent geen" . " " . $age . "</h2>");
    ?>
</div>
</body>
</html>
