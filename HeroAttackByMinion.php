<?php
namespace App;
use App\Personnage;
require'vendor/autoload.php';
$dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armur=0;

$minion =new Personnage("minion");
$minion->vie=10;
$minion->atk =10;
$minion->armur=0;
echo'<pre>';
echo 'la vie de dovakin est de ' .$dovakin->vie;
echo'</pre>';
echo'<pre>';
echo'le minion attaque';
echo'</pre>';
$minion->attaque($dovakin);
echo'<pre>';
echo'la vie de dovakin ' . $dovakin->vie;
echo'</pre>';

