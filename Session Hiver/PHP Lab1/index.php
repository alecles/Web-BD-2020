<!DOCTYPE html>
<html>




<head>
<meta charset="UTF-8">
<title>Accueil</title>
<link rel = "stylesheet" type = "text/css" href = "CSS.css">
</head>

<body>

<header>
    <h1> AIR CANADA </h1>
<?php
    if (isset($_POST["utilisateur"]))
    {
    echo ("Bonjour ".$_POST['utilisateur']);
    echo ("<a href = 'form.php'>Déconnexion</a>");
    }

    else
        {
            echo ("<a href = 'inscription.php'>S'inscrire</a> <a href = 'form.php'>Se connecter</a>");
        };
?>

</header>

<section id = "menu">
    <a href = 'form.php'>1</a> <br>
    <a href = 'form.php'>2</a> <br>
    <a href = 'form.php'>3</a>
</section>

<section id = "contenu">

</section>

<footer>
    <p>Fait par Alec Lespérance</p>
    <p>Contactez nous : lesal1831648@etu.cegepjonquiere.ca</p>
</footer>

</body>

</html>