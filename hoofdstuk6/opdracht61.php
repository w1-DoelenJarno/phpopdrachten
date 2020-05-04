<?php
/**
 * User: Jarno van der Doelen
 * Date: 21-04-2020
 * Time: 09:45 AM
 * File: opdracht6.1
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
        Opdracht 6.1
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
<form action="checklogin.php" method="post">
    <table>
        <tr>
            <td>
                <label for="username">Gebruikersnaam</label>
            </td>
            <td>
                <input type="text" name="username" id="username">
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Wachtwoord</label>
            </td>
            <td>
                <input type="password" name="password" id="password">
            </td>
        </tr>
    </table>
    <input type="submit" value="Log in" name="submit">
</form>
    <?php
    if(isset($_SESSION)) {
        echo("<p style='color: red'>" . $_SESSION["message"] . "</p>");
    }
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>
