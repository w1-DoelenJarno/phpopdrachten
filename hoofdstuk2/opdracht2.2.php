<?php
/**
 * User: Jarno
 * Date: 11-02-2020
 * Time: 12:38 PM
 * File: opdracht2.2.php
 */
?>

<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "Vind je niet";
$text15 = "toch";
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
        Opdracht 2.2
    </title>
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
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

    ?>
<h2>Taak 1</h2>
<?php
echo("<p>" . $text1 . $text11 . " " . $text4 . " " . $text5 . " " .  $text15 . " " . $text2 . $text10 . $text12 . $text7 . $text10 . " " . $text8 . " " . $text15 . $text9 . $text12 . $text6 . " " . $text5 . " " .  $text3 . " " . $text13 . $text10 . "</p>");
?>
<h2>Taak 3</h2>
<?php
echo("<p>" . $text1 . $text11 . $text12 . $text8 . " " . "$text15" . " " . "dat" . " " . $text5 . " " . "zo'n makkelijke taal" . " " . $text13 . $text10 . $text12 . $text7 . $text10 . " " . $text14 . $text9 . "</p>");
?>
</main>
</body>
</html>
