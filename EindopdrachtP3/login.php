<?php
/**
 * User: Jarno van der Doelen
 * Date: 07-04-2020
 * Time: 15:00 PM
 * File: EindopdrachtP3
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="EindopdrachtP3">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Eindopdracht P3
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
    <section>
        <h1>
            Bergheen
        </h1>
        <?php
        include("script.php");
        if($showLoginScreen == true) {
            ?>
        <h3>
            Login om onze adresgegevens + openingstijden te zien
        </h3>
        <h4>
            <?php echo($message)?>
        </h4>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <?php
        } else {
            ?>
        <section>
            <div id="info">
                <h3>
                    Welkom!
                </h3>
                <div>
                <fieldset id="businessHours">
                    <legend>Openingstijden</legend>
                    <table>
                        <tr>
                            <td>
                                Do:
                            </td>
                            <td>
                                22:00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Vr:
                            </td>
                            <td>
                                All day
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Za:
                            </td>
                            <td>
                                All day
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Zo:
                            </td>
                            <td>
                                12:00
                            </td>
                        </tr>
                    </table>
                </fieldset>
                </div>
                <div>
                <fieldset id="adress">
                    <legend>Adresgegevens</legend>
                    <p>
                        Am Wriezener Bahnhof <br>
                        10243 Berlin <br>
                        Duitsland
                    </p>
                </fieldset>
                </div>
                <p>
                    Deze gegevens dien je ten alle tijden geheim te houden!
                </p>
            </div>
        </section>
            <?php
        }
        ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>

