<?php
/**
 * User: Jarno van der Doelen
 * Date: 01-04-2020
 * Time: 09:05 AM
 * File: opdracht5.4
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Opdracht 5.4
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
    <h2>
        Stoplicht
    </h2>
<form action="#" method="post">
    <table>
        <tr>
            <td>
                <b>Komt er een ambulance aan?</b>
            </td>
            <td>
                <input type="radio" name="ambulanceComing" value="ja">Ja
                <input type="radio" name="ambulanceComing" value="nee">Nee
            </td>
        </tr>
        <tr>
            <td>
                <b>Stoplicht kleur</b>
            </td>
            <td>
                <input type="radio" name="trafficLightColor" value="rood">Rood
                <input type="radio" name="trafficLightColor" value="groen">Groen
                <input type="radio" name="trafficLightColor" value="oranje">Oranje
            </td>
        </tr>
    </table>
    <input name="submit" type="submit" value="Verzend">
</form>
    <hr>
    <h2>
        Wat is de situatie en wat moet ik doen?
    </h2>
    <?php
    if(isset($_POST["submit"])) {
        if (isset($_POST["ambulanceComing"]) && $_POST["ambulanceComing"] == "ja" && isset($_POST["trafficLightColor"]) && $_POST["trafficLightColor"] == "rood") {
            echo("<p>Stoplicht staat op " . $_POST["trafficLightColor"] . " en er komt een ambulance aan.</p>");
            echo("<p style=color:red;><b>U moet stoppen</b></p>");
        } else if (isset($_POST["ambulanceComing"]) && $_POST["ambulanceComing"] == "ja" && isset($_POST["trafficLightColor"]) && $_POST["trafficLightColor"] == "oranje") {
            echo("<p>Stoplicht staat op " . $_POST["trafficLightColor"] . " en er komt een ambulance aan.</p>");
            echo("<p style=color:red;><b>U moet stoppen</b></p>");
        } else if (isset($_POST["ambulanceComing"]) && $_POST["ambulanceComing"] == "ja" && isset($_POST["trafficLightColor"]) && $_POST["trafficLightColor"] == "groen") {
            echo("<p>Stoplicht staat op " . $_POST["trafficLightColor"] . " en er komt een ambulance aan.</p>");
            echo("<p style=color:red;><b>U moet stoppen</b></p>");
        } else if (isset($_POST["ambulanceComing"]) && $_POST["ambulanceComing"] == "nee" && isset($_POST["trafficLightColor"]) && $_POST["trafficLightColor"] == "rood") {
            echo("<p>Stoplicht staat op " . $_POST["trafficLightColor"] . " en er komt geen ambulance aan.</p>");
            echo("<p style=color:red;><b>U moet stoppen</b></p>");
        } else if (isset($_POST["ambulanceComing"]) && $_POST["ambulanceComing"] == "nee" && isset($_POST["trafficLightColor"]) && $_POST["trafficLightColor"] == "oranje") {
            echo("<p>Stoplicht staat op " . $_POST["trafficLightColor"] . " en er komt geen ambulance aan.</p>");
            echo("<p style=color:red;><b>U moet stoppen</b></p>");
        } else if (isset($_POST["ambulanceComing"]) && $_POST["ambulanceComing"] == "nee" && isset($_POST["trafficLightColor"]) && $_POST["trafficLightColor"] == "groen") {
            echo("<p>Stoplicht staat op " . $_POST["trafficLightColor"] . " en er komt geen ambulance aan.</p>");
            echo("<p style=color:green;><b>U mag doorrijden</b></p>");
        } else if (empty($_POST["ambulanceComing"]) || empty($_POST["trafficLightColor"])) {
            echo("Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.");
        }
    }
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>
