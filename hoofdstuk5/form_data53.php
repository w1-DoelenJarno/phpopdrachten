<?php
/**
 * User: Jarno van der Doelen
 * Date: 31-03-2020
 * Time: 11:03 AM
 * File: form_data53.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="opdracht53.css" rel="stylesheet" type="text/css">
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
    <?php
    include ("functions.php");
    ?>
    <table>
        <thead>
            <tr>
                <th>
                    Vraag
                </th>
                <th>
                    Antwoord
                </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Naam
            </td>
            <td>
                <?php
                echo($_POST["name"]);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Leeftijd
            </td>
            <td>
                <?php
                echo($_POST["age"]);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Gemeente
            </td>
            <td>
                <?php
                echo($_POST["township"]);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Inwoners
            </td>
            <td>
                <?php
                echo($_POST["citizens"]);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Aantal besmet
            </td>
            <td>
                <?php
                echo($_POST["infected"]);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Kenissen besmet
            </td>
            <td>
                <?php
                echo($_POST["relatedInfected"]);
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php
                if(isset($_POST["relatedInfected"]) && $_POST["relatedInfected"] == "Ja") {
                    echo("De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.");
                } else {
                    echo("De kans is minder groot omdat je niet via je eigen netwerk besmet kan raken.");
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Kans per ontmoeting op besmetting
            </td>
            <td>
                <?php
                echo(echoKans() . " %");
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Kans is 1 op
            </td>
            <td>
                <?php
                echo(getKans1Op());
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php
                $kans1op = getKans1Op();
                $vergelijking = vergelijkOorzaken($kans1op);
                echo($vergelijking);
                ?>
            </td>
        </tr>
        </tbody>
    </table>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>
