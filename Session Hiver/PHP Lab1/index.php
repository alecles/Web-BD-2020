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
    echo ("Bonjour ".$_POST['utilisateur']."   ");
    echo ("<a href = 'form.php'>Déconnexion</a>");
    }

    else
        {
            echo ("<a href = 'inscription.php'>S'inscrire</a> <a href = 'form.php'>Se connecter</a>");
        };

?>

</header>

<section id = "menu">
    <?php

    $xml = simplexml_load_file("menu.xml") or die();

    foreach ($xml->children() as $menu)
    {
        echo "<a href = 'form.php'>$menu->Fr.</a><br/>";
        echo "<a href = 'form.php'>$menu->En.</a><br/>";
        echo "<a href = 'form.php'>$menu->Url.</a><br/>";
        echo "<br/><br/><br/>";
    }

    ?>
</section>

<section id = "contenu">
    <?php

    $xml = simplexml_load_file("user.xml") or die();

    foreach ($xml->children() as $user)
    {
        echo $user->Username."<br/>";
        echo $user->Prenom."<br/>";
        echo $user->Courriel."<br/>";
        echo $user->Password."<br/>";
        echo "<br/><br/><br/>";

    }
    echo $_POST['utilisateur'];
    echo "<br/>";
    echo $_POST['password'];

    ?>
</section>

<footer>
    <p>Fait par Alec Lespérance</p>
    <p>Contactez nous : lesal1831648@etu.cegepjonquiere.ca</p>
</footer>

</body>

</html>