<?php
/**
 * User: Jarno van der Doelen
 * Date: 22-03-2020
 * Time: 11:49 AM
 * File: instructie05.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="opdracht5.2.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        instructie h5
    </title>
</head>
<body>
<h3>Huisarts bezoek formulier</h3>
<form action="instructie05.php" method="get">
    <p>Voornaam</p>
    <input type="text" name="firstName">
    <p>Achternaam</p>
    <input type="text" name="lastName">

    <p>Geboortedatum</p>
    <input type="date" name="birthDate">

    <p>Eventuele klachten</p>
    <textarea name="diseaseComplaints"></textarea>

    <input type="submit" value="Verzenden a.u.b">
    <?php
        // Bepalen of er een formulier verzonden is
    if(empty($_GET) == false) {
        // Er is een formulier verzonden. Doe iets met de invoer van de gebruiker.
        $userFirstName = $_GET["firstName"];
        echo("<h1>Opgegeven voornaam:" . $userFirstName . "</h1>");
        $userLastName = $_GET["lastName"];
        echo("<h1>Opgegeven achternaam:" . $userLastName . "</h1>");
        $userBirthdate = $_GET["birthDate"];
        echo("<h1>Opgegeven geboortedatum:" . $userBirthdate . "</h1>");
        $userdiseaseComplaints = $_GET["diseaseComplaints"];
        echo("<h1>Opgegeven naam:" . $userdiseaseComplaints . "</h1>");
    }
    ?>
</form>
</body>
</html>