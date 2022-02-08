<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require'vendor/autoload.php';

use App\Personnage;


$dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armure=0;
$dovakin->bonus_vie(30);
$dovakin->bonus_armur(30);

$minion =new Personnage("minion");
$minion ->vie=10;
$minion-> atk =10;

$lieutenant = new Personnage("lieutenant");
$lieutenant->vie=30;
$lieutenant->atk=30;
$lieutenant->armur=0;

$chef = new Personnage("chef");
$chef ->vie =100;
$chef->atk=100;
$lieutenant->armur=0;
$dovakin -> attaque($minion);
if($minion->mort()){
   echo 'le minion est mort ';
}if($dovakin->mort()){
    echo 'harry est mort ';

}
echo '<pre>';
var_export($dovakin);
var_export($minion);
var_export($lieutenant);
var_export($chef);