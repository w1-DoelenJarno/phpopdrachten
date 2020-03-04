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
    // Instructie 1 Hoofdstuk 4

    // Vertellen dat ons script de tijdzondes van Hong Kong moet aanhouden.
    date_default_timezone_set("Asia/Hong_Kong");

    // Toon de tijd in HH:MM formaat
    $currentTime = date("H:i:s");
    $lastWeek = date("D Y-m-d", strtotime("-7 days"));
    echo("<p>Huidige Tijd: " . $currentTime . "</p>");
    echo("<p>Vorige week: " . $lastWeek . "</p>");

    // Oefening 2: switch
    $currentDay = date("D");
    switch($currentDay) {
        case"Mon": "";
            echo("Garfield houdt van Lasagne op maandag");
            break;
        case"Tue": "";
            echo("Het is dinsdag");
            break;
        case"Wed": "";
            echo("Het is woensdag");
            break;
        case"Thu": "";
            echo("Het is donderdag");
            break;
        case"Fri": "";
            echo("Het is vrijdag");
            break;
        case"Sat": "";
            echo("Het is zaterdag");
            break;
        case"Sun": "";
            echo("Het is zondag");
            break;
        default:
            echo("Deze dag ken ik niet");
    }
?>
</body>
</html>
