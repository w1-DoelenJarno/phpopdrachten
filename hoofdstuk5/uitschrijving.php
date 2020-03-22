<?php
/**
 * User: Jarno van der Doelen
 * Date: 19-03-2020
 * Time: 09:37 AM
 * File: form_data.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="#" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Opdracht 5.1
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
    <h1>
        Uitschrijfformulier KW1C
    </h1>
    <hr>
    <table>
        <tr>
            <td>
                Voor en achternaam:
            </td>
            <td>
                <?php echo($_GET["flName"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Studentennummer:
            </td>
            <td>
                <?php echo($_GET["sNumber"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Datum van uitschrijving:
            </td>
            <td>
                <?php $userDate = ($_GET["sDate"]);
                $dutchDate = date("d-m-Y");
                echo($dutchDate);?>
            </td>
        </tr>
        <tr>
            <td>
                Reden van uitschrijving:
            </td>
            <td>
                <?php echo($_GET["reason"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Leerjaar:
            </td>
            <td>
                <?php echo($_GET["studyYear"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Aanmelden bij de succesklas:
            </td>
            <td>
                <?php if(isset($_GET["succesklas"]) && $_GET["succesklas"] == "Ja") {
                    echo("Er is aangemeld voor de succesklas");
                } else {
                    echo("Er is niet aangemeld voor de succesklas");
                }; ?>
            </td>
        </tr>
        <tr>
            <td>
                Verwijder gegevens:
            </td>
            <td>
                <?php
                if(isset($_GET["deleteInfo"]) && $_GET["deleteInfo"] == "Ja") {
                    echo("Gegevens moeten verwijderd worden.");
                } else {
                    echo("Gegevens hoeven niet te worden verwijderd.");
                };?>
            </td>
        </tr>
        <tr>
            <td>
                Reden van uitschrijving:
            </td>
        </tr>
        <tr>
            <td>
                <?php echo($_GET["messageReason"]); ?>
            </td>
        </tr>
    </table>

</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>