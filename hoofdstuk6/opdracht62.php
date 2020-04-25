<?php
/**
 * User: Jarno van der Doelen
 * Date: 25-04-2020
 * Time: 10:31 AM
 * File: opdracht6.2
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="opdracht62.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Opdracht 6.2
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
    <p>
        Speel het spel steen - papier - schaar tegen de computer
    </p>
    <form id="gameFrm" method="get" action="opdracht62.php">
        <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen"><img src="steen.jpg"></div>
        <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier"><img src="papier.jpg"></div>
        <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar"><img src="schaar.jpg"></div>
    </form>
    <?php
//Wat kiest de computer
//Random wordt er een getal tussen 0 en 2 gekozen
        $opties = array("steen", "papier", "schaar");
        $computerkeuzegetal = rand(0, 2);
        $computerkeuze = $opties[$computerkeuzegetal];
        $message = "Start het spel door schaar, papier of steen te kiezen. De computer kiest tegelijkertijd met jou.";
        session_start();
        if(!isset($_SESSION["stand"])) {
            $_SESSION["stand"] = array(0,0);
        }
        if (isset($_GET["keuze"])) {
            $spelerkeuze = $_GET["keuze"];
            echo "Jij koos: <img src='{$spelerkeuze}.jpg'>&nbsp;&nbsp;De computer koos: <img src='{$computerkeuze}.jpg'>";
            if ($computerkeuze == $spelerkeuze) {
                $_SESSION["stand"][0] +=1;
                $_SESSION["stand"][1] +=1;
                $message = "Gelijk!";
            } else if ($computerkeuze == "steen" && $spelerkeuze == "papier" || $computerkeuze == "papier" && $spelerkeuze == "schaar" || $computerkeuze == "schaar" && $spelerkeuze == "steen") {
                $message = "Jij scoort";
                $_SESSION["stand"][0] +=1;
            } else if ($computerkeuze == "steen" && $spelerkeuze == "schaar" || $computerkeuze == "papier" && $spelerkeuze == "steen" || $computerkeuze == "schaar" && $spelerkeuze == "papier") {
                $message = "Computer scoort";
                $_SESSION["stand"][1] +=1;
            }
            if($_SESSION["stand"][0] == 5 || $_SESSION["stand"][1] == 5) {
                if($_SESSION["stand"][0] == 5) {
                    $message = "<p> Jij wint! </p> <p> Het spel start opnieuw als je een nieuwe keuze maakt </p>";
                } else if($_SESSION["stand"][1] == 5) {
                    $message = "<p> De Computer wint! </p> <p> Het spel start opnieuw als je een nieuwe keuze maakt </p>";
                }
                session_destroy();
            }
            echo("<p>" . $message . "</p> <p>De score is " . $_SESSION["stand"][0] . " tegen " . $_SESSION["stand"][1]);
        } else {
            echo("<p>" . $message . "</p>");
        }
?>
</main>
<?php
//include("../includes/footer.php");
?>
</body>
</html>
