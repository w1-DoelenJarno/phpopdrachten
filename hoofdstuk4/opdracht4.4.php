<?php
/**
 * User: Jarno van der Doelen
 * Date: 12-03-2020
 * Time: 11:28 AM
 * File: opdracht4.4.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="opdracht4.2.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Opdracht 4.4
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
    $dagNamen = array("zondag", "maandag" , "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag");
    for($c = 0; $c <= 7; $c++) {
        $datumAlsGetal = strtotime("+$c days");
        $dagNummer = date("w", $datumAlsGetal);
        echo("Dag " . $dagNummer . " is " . $dagNamen[$dagNummer] . " " . date("d-m-Y" , $datumAlsGetal));
        echo("<br>");
    }
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>