<?php
/**
 * User: Jarno van der Doelen
 * Date: 22-03-2020
 * Time: 11:49 AM
 * File: opdracht5.2.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Index php opdrachten">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="opdracht5.2.css" rel="stylesheet" type="text/css">
    <script src="#" defer></script>
    <title>
        Opdracht 5.2
    </title>
</head>
<body>
<h1>
    Uitschrijvingformulier KW1C
</h1>
<hr>
<form action="uitschrijving.php" method="get">
    <table>
        <tr>
            <td>
                <label for="flName">Voor en achternaam</label>
            </td>
            <td>
                <input type="text" id="flName" name="flName">
            </td>
        </tr>
        <tr>
            <td>
                <label for="sNumber">Studentennummer</label>
            </td>
            <td>
                <input type="number" id="sNumber" name="sNumber">
            </td>
        </tr>
        <tr>
            <td>
                <label for="sDate">Datum van uitschrijving</label>
            </td>
            <td>
                <input type="date" id="sDate" name="sDate">
            </td>
        </tr>
        <tr>
            <td>
                <label for="reason">Reden van uitschrijving</label>
            </td>
            <td>
                <select name="reason" id="reason">
                    <option value="Verkeerde keuze">Verkeerde keuze</option>
                    <option value="Andere school">Andere school</option>
                    <option value="Ziek">Ziek</option>
                    <option value="Te moeilijk">Te moeilijk</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label id="studyYear">Leerjaar</label>
            </td>
            <td>
                <input type="radio" id="1eleerjaar" name="studyYear" value="1e leerjaar">
                <label for="1eleerjaar">1e leerjaar</label> <br>
                <input type="radio" id="2eleerjaar" name="studyYear" value="2e leerjaar">
                <label for="2eleerjaar">2e leerjaar</label> <br>
                <input type="radio" id="3eleerjaar" name="studyYear" value="3e leerjaar">
                <label for="3eleerjaar">3e leerjaar</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="succesklas" name="succesklas" value="Ja">
                <label for="succesklas">Ik wil me aanmelden bij de succesklas</label> <br>
                <input type="checkbox" id="deleteInfo" name="deleteInfo" value="Ja">
                <label for="deleteInfo">Verwijder mijn gegevens uit het systeem</label> <br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="messageReason">Geef hieronder de reden van je uitschrijving op</label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea id="messageReason" name="messageReason"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="Send" value="Versturen">
            </td>
        </tr>
    </table>
</form>
</body>
</html>