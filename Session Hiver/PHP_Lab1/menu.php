<?php
$xml = simplexml_load_file("menu.xml") or die();

if(isset($_COOKIE["langue"]))
{
    foreach ($xml->children() as $lien)
    {
        if ($_COOKIE["langue"]== "en")
        {
            echo '<a href ="'.$lien->Url.'"> '.$lien->en.'</a>';
        }

        else
            echo '<a href ="'.$lien->Url.'"> '.$lien->fr.'</a>';

    }
}

