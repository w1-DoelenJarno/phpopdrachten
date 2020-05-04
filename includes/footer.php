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
if(!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['username'])) {
    $bezoeker = $_SESSION['username']. "&nbsp;<a 
href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
}
else {
    $bezoeker = "onbekende bezoeker". "&nbsp;<a 
href='/phpopdrachten/hoofdstuk6/opdracht61.php'>Login</a>";
}
?>

<?php
include ("variabelen.php");

// De footer via echo getoond aan de gebruiker
echo("<footer>");
echo($greetings . " " . $bezoeker . " &copy; " . $year);
echo("</footer>");
?>

