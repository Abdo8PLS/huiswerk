<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Formulier</title>
 
 
</head>
<body>
    <h1>Vul het formulier</h1>
    <form action="" method="post">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" required><br>
 
        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" required><br>
 
        <label for="leeftijd">Leeftijd:</label>
        <input type="number" name="leeftijd" required><br>
 
        <label for="adres">Adres:</label>
        <input type="text" name="adres" required><br>
 
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
 
        <input type="submit" value="Verstuur">
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "post" && !empty($_post)) {
        echo "<h2>Ingevoerde gegevens:</h2>";
        echo "<p>Naam: " . $_post['naam'] . "</p>";
        echo "<p>Achternaam: " . $_post['achternaam'] . "</p>";
        echo "<p>Leeftijd: " . $_post['leeftijd'] . "</p>";
        echo "<p>Adres: " . $_post['adres'] . "</p>";
        echo "<p>Email: " . $_post['email'] . "</p>";
    }
    ?>
</body>
</html>