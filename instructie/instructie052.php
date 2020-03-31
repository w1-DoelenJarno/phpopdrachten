<html>
<head>
    <title>
        H5 Les 2 - POST
    </title>
</head>
<body>
<form action="instructie052form.php" method="post">
    <h1>
        Wachtrij Groenteboer Spierings
    </h1>
    <p>
        Naam:
    </p>
    <input type="text" name="fullName">
    <p>
        Man / Vrouw
    </p>
    <input type="radio" name="gender" value="male">Man
    <input type="radio" name="gender" value="female">Vrouw
    <input type="radio" name="gender" value="unkown">Onbekend
    <p>
        Gemeente
    </p>
    <select name="township">
        <option value="denbosch">Den Bosch</option>
        <option value="heusden">Heusden</option>
        <option value="tilburg">Tilburg</option>
        <option value="haren">Haren</option>
    </select>
    <input type="submit" value="Send">
</form>
</body>
</html>