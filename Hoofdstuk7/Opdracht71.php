<?php
/**
 * User: Jarno van der Doelen
 * Date: 07-05-2020
 * Time: 10:43 AM
 * File: opdracht7.1
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
        Opdracht7.1
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
    // Open de database connectie en ODBC driver
    try {
        $pdo = new PDO("odbc:odbc2sqlserver");
    } catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }

    echo "database connectie gelukt";

    // Uitvoeren van een SQl query
    try {
        // Query schrijven
        $sql = 'SELECT * FROM joke WHERE id = 1';

        // Query uitvoeren
        $result = $pdo->query($sql);
    }
    catch (PDOException $e) {
        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
        exit();
    }

    // Lege Array aanmaken voor de results
    $aJokes = array();

    // Door de results heen loopen via een while
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        // Result wegschrijven in de $aJokes array
        $aJokes[] = $row; }

    // Tonen van de inhoud van aJokes
    echo("<pre>");
    var_dump($aJokes);
    echo("</pre>");
    foreach ($aJokes as $index => $value) {
        echo("<p>" . $value["joketext"] . $value["jokeclou"] . "</p>");
    }
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>

