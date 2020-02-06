<?php

$xml = simplexml_load_file("menu.xml") or die();

foreach ($xml->children() as $lien)
{
    if ($_COOKIE["langue"]== "english")
    {
        echo '<a href ="'.$lien->Url.'"> '.$lien->en.'</a>';
    }

    else
        echo '<a href ="'.$lien->Url.'"> '.$lien->fr.'</a>';




}
