<?php
$cookie_name = "langue";
$cookie_value = $_POST["langue"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day

$xml = simplexml_load_file("menu.xml") or die();

foreach ($xml->children() as $lien)
{
    if ($_COOKIE["langue"]== "en")
    {
        echo '<a href ="'.$lien->Url.'"> '.$lien->en.'</a>';
    }

    else
        echo '<a href ="'.$lien->Url.'"> '.$lien->fr.'</a>';

}
