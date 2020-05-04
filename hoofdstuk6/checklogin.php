<?php

$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);
if(isset($_POST["submit"]) == true) {
    foreach ($authUsers as $username => $password) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION["message"] = "";
            $error = false;
            header('location: welkom.php');
        } else {
            $error = true;
        }
    }
}

?>

<?php
if ($error == true) {
    if (empty($_POST["username"] == true) || empty($_POST["password"]) == true) {
        $_SESSION["message"] = "U heeft geen gebruikersnaam/wachtwoord ingevuld.";
        include "opdracht61.php";
    }
    else
    {
        $_SESSION["message"] = "Ongeldige username/wachtwoord. " . $_POST["username"] . " probeer het nog eens.";
        include "opdracht61.php";
    }
}
?>