<?php
/**
 * User: Jarno van der Doelen
 * Date: 03-03-2020
 * Time: 12:15 PM
 * File: opdracht4.2.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="opdracht4.2.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Index
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
    <?php
    include("script.php");
    ?>
    <p>Voor het vak <span><?php echo("$courseName")?></span> hebben wij <span><?php echo("$teacherName")?></span> als docent.</p>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>