<?php
session_start();
$_SESSION["Username"];
$_SESSION["Courriel"];
$_SESSION["Password"];
$_SESSION["Prenom"];
$_SESSION["Nom"];

$servername = "localhost";
$username = "root";
$password = "mysql";
$verif = "Bonjour";

$xml = simplexml_load_file("user.xml") or die();

if(isset($_SESSION["Username"])==false)
{
    if(isset($_POST["username"]))
    {
        foreach ($xml->children() as $utilisateur)
        {
            if ($_POST["username"] == $utilisateur->Username && $_POST["password"] == $utilisateur->Password)
            {
                $_SESSION["Prenom"] = $utilisateur->Prenom;
                $_SESSION["Nom"] = $utilisateur->Nom;
                $_SESSION["username"] = $utilisateur->Username;
                $_SESSION["Courriel"] = $utilisateur->Courriel;
                $_SESSION["Password"] = $utilisateur->Password;

            }
        }


        $_SESSION["verif"]="Bonjour";
    }
    else
        {
        header("Location: connexion.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Accueil</title>
<link rel = "stylesheet" type = "text/css" href = "CSS.css">
</head>

<body>

<?php
include "header.php";
?>


<section id = "menu">
    <?php
    include "menu.php";
    ?>
</section>

<section id = "contenu">
    <?php

    $xml = simplexml_load_file("user.xml") or die();

    foreach ($xml->children() as $user)
    {
        echo $user->Username."<br/>";
        echo $user->Prenom."<br/>";
        echo $user->Nom."<br/>";
        echo $user->Courriel."<br/>";
        echo $user->Password."<br/>";
        echo "<br/><br/><br/>";

    }
    echo $_POST['username'];
    echo "<br/>";
    echo $_POST['password'];
    echo "<br/>";
    echo $_POST['langue'];

    ?>
</section>

    <?php
    include "footer.php";
    ?>


</body>

</html>