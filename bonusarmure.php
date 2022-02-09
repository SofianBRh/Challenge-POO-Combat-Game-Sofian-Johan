<?php 
namespace App;
use App\Personnage;
require'vendor/autoload.php';
$dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armur=0;



echo '<pre>';
echo'la vie de votre héro est de ' . $dovakin->armur;
echo'</pre>';
echo'<pre>';
echo 'Dovakin recoit le bonus d armur';
echo '</pre>';
$dovakin->bonus_armur(20);
echo'<pre>';
echo'l armure de Dovakin est de ' . $dovakin->armur;
echo '</pre>';
