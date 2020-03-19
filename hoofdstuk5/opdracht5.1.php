<?php
/**
 * User: Jarno van der Doelen
 * Date: 19-03-2020
 * Time: 09:37 AM
 * File: opdracht5.1.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="opdracht5.1.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Opdracht 5.1
    </title>
</head>
<body>
<h1>
    Restaria Kees Kroket
</h1>
<p>
    Visstraat 12 <br>
    5211 DN 's-Hertogenbosch <br>
    073 613 6720 <br>
    info@restariakeeskroket.nl
</p>
<form action="form_data.php" method="get">
    <label for="bName">Bedrijfsnaam</label> <br>
    <input type="text" id="bName" name="bName"> <br>
    <label for="fName">Voornaam</label> <br>
    <input type="text" id="fName" name="fName"> <br>
    <label for="lName">Achternaam</label> <br>
    <input type="text" id="lName" name="lName"> <br>
    <label for="pNumber">Telefoon</label> <br>
    <input type="tel" id="pNumber" name="pNumber"> <br>
    <label for="email">E-mail</label> <br>
    <input type="email" id="email" name="email"> <br>
    <label for="message">Bericht</label> <br>
    <textarea id="message" name="message"></textarea> <br>
    <input type="submit" name="Send" value="Versturen">
</form>
</body>
</html>