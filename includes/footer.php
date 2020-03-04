<?php
/**
 * User: Jarno van der Doelen
 * Date: 20-02-2020
 * Time: 10:00 PM
 * File: footer.php
 */
?>

<?php
date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    $greetings = "";

    if($uur >= 0 && $uur < 5) {
        $greetings = ("Goedennacht");
    } else if($uur >= 5 && $uur < 12) {
        $greetings = ("Goedenochtend");
    } else if($uur >= 12 && $uur < 17) {
        $greetings = ("Goedenmiddag");
    } else {
        $greetings = ("Goedenavond");
    }
?>

<?php
    include ("variabelen.php");

    // De footer via echo getoond aan de gebruiker
    echo("<footer>");
    echo($greetings . "  bezoeker, &copy; " . $year . " " . $name);
    echo("</footer>");
?>
