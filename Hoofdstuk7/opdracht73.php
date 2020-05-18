<?php
/**
 * User: Jarno van der Doelen
 * Date: 12-05-2020
 * Time: 10:19 AM
 * File: opdracht7.3
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
        Opdracht7.3
    </title>
    <style>
        table, th, tr, td {
            border: 1px solid black;
        }
    </style>
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

    // Inladen functies bestand
    include("functions.php");

    // Starten van een database connectie
    startConnection();

    // Executeren van een SQL query
    if(isset($_GET["submit"]) && !empty($_GET["searchWord"])) {
        $searchLike = $_GET["searchWord"];
        $query = "SELECT * FROM joke WHERE joketext LIKE '%$searchLike%'";
        $jokes = executeQuery($query);
    } else {
        $query = "SELECT * FROM joke";
        $jokes = executeQuery($query);
    }

    ?>
    <?php
    echo ("<p> $query </p>");
    ?>
    <form action="opdracht73.php" method="get">
        <label for="searchWord">Zoekterm</label>
        <input type="text" id="searchWord" name="searchWord">
        <input type="submit" value="Zoeken" name="submit">
    </form>
    <hr>
    <table>
        <tr>
            <th>
                Jokeid
            </th>
            <th>
                Joketext
            </th>
            <th>
                Jokeclou
            </th>
            <th>
                Jokedate
            </th>
        </tr>
        <?php
        // Resultaten rij voor rij ophalen
        while ($row = $jokes->fetch(PDO::FETCH_ASSOC)) {
            echo ("<tr><td>" . $row["id"] . "</td><td>" . $row["joketext"] . "</td><td>" . $row["jokeclou"] . "</td><td>" . $row["jokedate"] . "</td></tr>");
        }
        ?>
    </table>
    <p><a href="insert.php">Grap toevoegen</a></p>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>

