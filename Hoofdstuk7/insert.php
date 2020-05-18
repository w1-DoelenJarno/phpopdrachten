<?php
/**
 * User: Jarno van der Doelen
 * Date: 18-05-2020
 * Time: 09:44 AM
 * File: opdracht7.4
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="utf-8">
    <link href="../style.css" type="text/css" rel="stylesheet">
    <title>
        Opdracht7.4
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
        Nieuwe grap toevoegen
    </h1>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="jokeText">
                        Joketext
                    </label>
                </td>
                <td>
                    <input type="text" id="jokeText" name="jokeText" placeholder="Joketext komt hier">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jokeClou">
                        Jokeclou
                    </label>
                </td>
                <td>
                    <input type="text" id="jokeClou" name="jokeClou" placeholder="Jokeclou komt hier">
                </td>
            </tr>
        </table>
        <input type="submit" value="Verstuur" name="submit">
    </form>
    <?php
    include("functions.php");
    if(isset($_POST["submit"])) {
        if(!empty($_POST["jokeText"]) && !empty($_POST["jokeClou"])) {
            $jokeText = $_POST["jokeText"];
            $jokeClou = $_POST["jokeClou"];
            startConnection();
            $query = "INSERT INTO dbo.joke VALUES ('$jokeText','$jokeClou',GETDATE())";
            echo($query);
            executeQueryViaExec($query);
            echo("<h2>Grap toegevoegd!</h2>");
            echo("<p>Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:</p>");
            echo("Joketext: " . $jokeText . "<br>");
            echo("Jokeclou: " . $jokeClou);
            echo("<p><a href='opdracht73.php'>Bekijk grappen (opdracht7.3)</a></p>");
        } else {
            echo("Je hebt geen Joketext en/of Jokeclou ingevuld");
        }
    }
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>

