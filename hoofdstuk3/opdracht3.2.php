<?php
/**
 * User: Jarno
 * Date: 20-02-2020
 * Time: 08:45 PM
 * File: opdracht3.2.php
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <link href="../style.css" type="text/css" rel="stylesheet">
    <script src="#" defer></script>
    <title>
        Opdracht 3.2
    </title>
</head>
<body>
<?php
include("../includes/header.php");
?>
<aside>
    <h2 class="menu">Menu</h2>
    <ul>
        <li>
            <a href="../index.php">Terug</a>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
        // Declareren en initialiseren van de gewenste variabelen
        $trafficLightColor = "Groen";
        $ambulanceComing = true;

        // driveOn declareren en initialiseren
        $driveOn = true;

        // Checken of auto mag doorrijden of moet stoppen
        if($trafficLightColor == "Groen" && $ambulanceComing == false) {
            $driveOn = true;
        } else if ($trafficLightColor == "Groen" && $ambulanceComing == true) {
            $driveOn = false;
        } else if($trafficLightColor == "Oranje") {
            $driveOn = false;
        } else if($trafficLightColor == "Rood") {
            $driveOn = false;
        } else {
            echo("<p>Foutje. Het stoplicht heeft een ongeldige kleur</p>");
            $driveOn = true;
        }

        // Tonen van melding aan automobilist
        if($driveOn == true) {
            echo("<h1 style='color:green;'>U mag doorrijden.</h1>");
        } else {
            echo("<h1 style='color:red;'>U mag NIET doorrijden</h1>");
        }
    ?>
    <hr>
    <?php
        // Deel 2: Alchohol in verschillende landen opdracht
        $countryName = "Nederland";
        $currentAge = 20;

        // Tonen algemene gegevens
        echo("<p>Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.</p>");

        // Tonen van de drank informatie

        if($countryName == "België" && $currentAge >= 16 && $currentAge < 18) {
            echo("<p>Je mag hier alleen zwakke drank drinken.</p>");
        } else if ($countryName == "België" && $currentAge >= 18) {
            echo("<p>Je mag hier alle drank drinken.</p>");
        } else if($countryName == "Bulgarije" && $currentAge >= 18) {
            echo("<p>Je mag hier alle drank drinken.</p>");
        } else if($countryName == "Cyprus" && $currentAge >= 17) {
            echo("<p>Je mag hier alle drank drinken</p>");
        } else if($countryName == "Nederland" && $currentAge >= 18) {
            echo("<p>Je mag hier alle drank drinken</p>");
        } else if($countryName == "Zweden" && $currentAge >= 18 && $currentAge < 20) {
            echo("<p>Je mag hier alleen zwakke drank drinken</p>");
        } else if($countryName == "Zweden" && $currentAge >= 18) {
            echo("<p>Je mag hier alle drank drinken</p>");
        } else {
            echo("<p>Je mag hier geen drank drinken</p>");
        }
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>
