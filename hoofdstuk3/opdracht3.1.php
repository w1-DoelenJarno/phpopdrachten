<?php
/**
 * User: Jarno van der Doelen
 * Date: 11-02-2020
 * Time: 12:06 PM
 * File: index.php
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
        Index
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
        $evenement = "Elfstedentoch";
        $evenementFries = "Alvestêdetocht";
        $lengteKM = 200;
        $tocht = "schaatstocht";
        $soortIjs = "natuurijs";
        $vereneging = "Koninklijke Vereniging De Friesche Elf Steden";
        $hoofdstad = "Leeuwarden";
        $provincie = "Friesland";
        $aantalKeerGehouden = 15;
        $jaarEersteKeer = 1909;
        $maxAantalKeer = 1;

        $verhaal1 = "De Elfstedentocht (Fries: Alvestêdetocht) is een 200 kilometer lange schaatstocht over natuurijs die wordt georganiseerd door de Koninklijke Vereniging De Friesche Elf Steden. Leeuwarden, de hoofdstad van Friesland, is start- en aankomstplaats. De Elfstedentocht is inmiddels 15 maal verreden en werd voor het eerst in 1909 gereden en wordt maximaal 1 keer per winter gehouden.";
        $verhaal2 = "De " . $evenement . " (Fries: " . $evenementFries . ") is een " . $lengteKM . " kilometer lange " . $tocht . " over " . $soortIjs . " die wordt georganiseerd door de " . $vereneging . ". " . $hoofdstad . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $evenement . " is inmiddels " . $aantalKeerGehouden . " maal verreden en werd voor het eerst in " . $jaarEersteKeer . " gereden en wordt maximaal " . $maxAantalKeer . " keer per winter gehouden.";
    ?>
    <!--Taak 1 -->
    <?php
    echo("<p>" . $verhaal1 . "</p>");
    ?>
    <hr>
    <!--Taak 2 -->
    <?php
    echo("<p>" . $verhaal2 . "</p>");
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>