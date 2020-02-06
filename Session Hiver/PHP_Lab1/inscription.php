<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel = "stylesheet" href = "CSS.css">
</head>

<body>

<header>
    <h1> AIR CANADA </h1>
    <a href = "index.php">Accueil</a> <a href = "connexion.php">Se connecter</a>
</header>

<h1>Incrivez-vous</h1>
<form action="index.php" method = "post">
    <label>Nom utilisateur :</label>
    <input type="text" name="utilisateur"><br>

    <label>Mot de passe :</label>
    <input type="password" name="password"><br>

    <input type="submit" value="Envoyer">
</form>

<?php
    include "footer.php";
?>

</body>

</html>