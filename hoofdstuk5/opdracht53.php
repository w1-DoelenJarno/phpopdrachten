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
        Opdracht 5.3
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
    <h1>
        Corona enquete:
    </h1>
    <hr>
    <form action="form_data53.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">Wat is je naam:</label>
                </td>
                <td>
                    <input id="name" type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="age">Wat is je leeftijd:</label>
                </td>
                <td>
                    <input id="age" type="number" name="age">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="township">Gemeente:</label>
                </td>
                <td>
                    <select id="township" name="township">
                        <option value="Den Bosch">Den Bosch</option>
                        <option value="Heusden">Heusden</option>
                        <option value="Tilburg">Tilburg</option>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Den Haag">Den Haag</option>
                        <option value="Rotterdam">Rotterdam</option>
                        <option value="Utrecht">Utrecht</option>
                        <option value="Groningen">Groningen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="citizens">Aantal inwoners gemeente:</label>
                </td>
                <td>
                    <input id="citizens" type="number" name="citizens">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="relatedInfected">Ken je mensen die besmet zijn in je woonplaats?</label>
                </td>
                <td>
                    <input name="relatedInfected" type="radio" value="Ja">Ja
                    <input name="relatedInfected" type="radio" value="Nee">Nee
                </td>
            </tr>
            <tr>
                <td>
                    <label for="infected">Aantal mensen</label>
                </td>
                <td>
                    <input id="infected" type="number" name="infected">
                </td>
            </tr>
        </table>
        <input type="submit" value="Verzend">
        <p>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/">site RIVM</a></p>
    </form>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>
