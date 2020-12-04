
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll The Dice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    echo ("<main class='mainResultat'>");
    echo ("<h1>Voici vos dés</h1>");
    $chosenDice = $_POST["chosenDice"] ?? false;
    $numberOfDice = $_POST["numberOfDice"] ?? false;
    echo ("<div class='resultat'>");
    while ($numberOfDice >= 1){
    $rand = random_int(1,$chosenDice);
    echo ("<p>Le résultat du dé n°$numberOfDice est : <strong>$rand</strong>  <br></p>");
    $numberOfDice--;
    }
    echo ("< class='chosenDice'>Vous avez choisis des dés à $chosenDice faces.</  p>");
    echo ('</div>');

    $numberOfDice = $_POST["numberOfDice"] ?? false;

    echo ("<form action='app.php' method='post'>
    <input id='numberOfDice' name='numberOfDice' type='hidden' value='$numberOfDice'>
    <input id='chosenDice' name='chosenDice' type='hidden' value='$chosenDice'>
    <input class='btnRelancer' type='submit' value='RELANCER'>
    </form>
    <a class='aquimarchepas' href='index.html'><button class='btnAccueil'>Accueil</button></a>
    </main>");
?>
</body>
</html>