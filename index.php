<?php
/**
 * User: Jarno van der Doelen
 * Date: 11-02-2020
 * Time: 12:06 PM
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Index
    </title>
</head>
<body>
<?php
    include("includes/header.php");
?>
<aside>
    <h2 class="menu">Menu</h2>
    <ul>
        <li class="chapter">Hoofdstuk 2
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht2.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li class="chapter">Hoofdstuk 3
            <ul>
                <li>
                    <a href="hoofdstuk3/opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="hoofdstuk3/opdracht3.2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="hoofdstuk3/opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <li  class="chapter">Hoofdstuk 4
            <ul>
                <li>
                    <a href="hoofdstuk4/opdracht4.1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht4.2.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.4</a>
                </li>
            </ul>
        </li>
        <li  class="chapter">Hoofdstuk 5
            <ul>
                <li>
                    <a href="#">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.3</a>
                </li>                <li>
                    <a href="#">Opdracht 5.4</a>
                </li>
            </ul>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
</main>
<?php
include("includes/footer.php");
?>
</body>
</html>

