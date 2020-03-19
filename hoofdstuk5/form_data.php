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
    <link href="opdracht5.1.css" rel="stylesheet" type="text/css">
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
    <table>
        <tr>
            <td>
                Bedrijfsnaam:
            </td>
            <td>
                <?php echo($_GET["bName"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Voornaam:
            </td>
            <td>
                <?php echo($_GET["fName"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Achternaam:
            </td>
            <td>
                <?php echo($_GET["lName"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Telefoon:
            </td>
            <td>
                <?php echo($_GET["pNumber"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                E-mail:
            </td>
            <td>
                <?php echo($_GET["email"]); ?>
            </td>
        </tr>
        <tr>
            <td>
                Bericht:
            </td>
            <td>
                <?php echo($_GET["message"]); ?>
            </td>
        </tr>
    </table>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>