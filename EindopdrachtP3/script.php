<?php
/**
 * User: Jarno van der Doelen
 * Date: 07-04-2020
 * Time: 15:00 PM
 * File: EindopdrachtP3
 */
?>

<?php
$showLoginScreen = true;
$account["Jarno1"] = "Doelen1";
$account["Niels2"] = "Julicher2";
$account["Sjul3"] = "Grooten3";
$account["Koos4"] = "Pennings4";
$account["Youri5"] = "Pols5";
$account["Mark6"] = "Sloesen6";
$account["Alberto7"] = "Hoek7";
$account["Miquel8"] = "Wit8";
$account["Ries9"] = "Leenders9";
$account["Jordan10"] = "Willigen10";
$message = "";


if(isset($_POST["submit"]) == true) {
    if(empty($_POST["username"] == false) && empty($_POST["password"]) == false) {
        foreach ($account as $username => $password) {
            if($username == $_POST["username"] && $password == $_POST["password"]) {
                $showLoginScreen = false;
            } else if($username != $_POST["username"] || $password != ["password"]) {
                $message = "Foutieve username en / of wachtwoord";
            }
        }
    } else {
        $message = "Je hebt geen username en / of wachtwoord ingevuld";
    }
}

?>