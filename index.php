<?php

date_default_timezone_set('Europe/Paris');
require_once "./fonctions/autoLoader.php";
spl_autoload_register('autoLoader');

//require_once "./classes/Personnage.php";
//require_once "./classes/Magicien.php";

$merlin = new Magicien("David Copperfield");
$merlin->unnomdemethodealacon();
Log::logWrite("coucou");
echo '<pre>';
var_dump($merlin);
echo '</pre>';
echo '<br>';


//$michel = new Personnage();
//$michel->nom = 'Bob l\'éponge';
//$michel->taille = "180 cm";
//echo $michel->marcher();
//echo '<br>';
