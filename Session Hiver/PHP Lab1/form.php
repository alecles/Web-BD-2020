<!DOCTYPE html>
<html>
<?php

echo '

<head>
<meta charset="UTF-8">
<title>Formulaire</title>
<link rel = "stylesheet" href = "CSS.css">
</head>

<body>

<header>
    <h1> AIR CANADA </h1> 
    <a style="color:black;" href = "index.php">Accueil</a>
</header>

<h1>Connectez-vous</h1>
<form action="index.php" method = "post">
    <label>Nom utilisateur :</label>
    <input type="text" name="utilisateur"><br>

    <label>Mot de passe :</label>
    <input type="password" name="password"><br>

   <input type="submit" value="Envoyer">
   <input type="button" value="Inscription">
   </form>


<footer>
    <p>Fait par Alec Lespérance</p>
    <p>Contactez nous : lesal1831648@etu.cegepjonquiere.ca</p>
</footer>


</body>
';
?>


</html>