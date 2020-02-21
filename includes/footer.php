<?php
/**
 * User: Jarno van der Doelen
 * Date: 20-02-2020
 * Time: 10:00 PM
 * File: footer.php
 */
?>

<?php
    include ("variabelen.php");

    // De footer via echo getoond aan de gebruiker
    echo("<footer>");
    echo("&copy; " . $year . " " . $name);
    echo("</footer>");
?>
