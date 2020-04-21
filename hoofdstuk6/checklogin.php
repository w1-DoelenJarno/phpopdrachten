<?php

$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);

foreach ($authUsers as $username => $password) {
    if ($_POST['username'] == $username && $_POST['password'] == $password)
    {
        $continue = true;
    }
}

?>

<?php
if ($continue == true)
{
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
}
else if (empty($_POST["username"] == true) || empty($_POST["password"]) == true) {
    $_SESSION["message"] = "U heeft geen gebruikersnaam/wachtwoord ingevuld.";
    include "opdracht61.php";
}
else
    {
// $message = "Ongeldige username/wachtwoord                                // {$_POST['username']}, probeer het nog eens.";
    $_SESSION["message"] = "Ongeldige username/wachtwoord. " . $_POST["username"] . " probeer het nog eens.";
    include "opdracht61.php";
    }
?>


