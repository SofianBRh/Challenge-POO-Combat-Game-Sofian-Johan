<?php 
namespace App;
use App\Personnage;
$dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armur=0;



echo '<pre>';
echo'la vie de votre héro est de ' . $hero->armur;
echo'</pre>';
echo'<pre>';
echo 'Dovakin recoit le bonus d armur';
echo '</pre>';
$dovakin->bonus_armur();
echo'<pre>';
echo'l armure de Dovakin est de ' . $dovakin->armur;
echo '</pre>';
