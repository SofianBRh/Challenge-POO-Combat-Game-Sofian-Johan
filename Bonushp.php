<?php
namespace App;
use App\Personnage;
require'vendor/autoload.php';
$dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armur=0;

$dovakin->bonus_armur();

echo '<pre>';
echo'la vie de votre héro est de ' . $dovakin->vie;
echo'</pre>';
echo'<pre>';
echo 'Dovakin recoit le bonus de vie ';
echo '</pre>';
$dovakin->bonus_vie(50);
echo'<pre>';
echo'la vie de Dovakin est de ' . $dovakin->vie;
echo '</pre>';




