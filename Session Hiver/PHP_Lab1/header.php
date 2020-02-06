<?php

Echo("
<header>
    <h1 class='titre1'>Air CANADA</h1>
");
if(isset($_SESSION["username"]))
{
    echo ($_SESSION["verif"]." ".$_SESSION["Prenom"]." ".$_SESSION["Nom"]);
    echo("<a href='connexion.php' >Déconnexion</a>");
}
echo("
</header>
");
?>
