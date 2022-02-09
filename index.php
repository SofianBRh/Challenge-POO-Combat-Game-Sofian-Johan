<?php 
namespace App;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require'vendor/autoload.php';

use App\Personnage;


$dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armur=0;
$dovakin->bonus_vie();
$dovakin->bonus_armur();

$minion =new Personnage("minion");
$minion->vie=10;
$minion->atk =10;
$minion->armur=0;

$lieutenant = new Personnage("lieutenant");
$lieutenant->vie=30;
$lieutenant->atk=30;
$lieutenant->armur=0;

$chef = new Personnage("chef");
$chef->vie =100;
$chef->atk=100;
$chef->armur=0;

$dovakin->attaque($minion);
echo'<pre>';
echo 'la vie de dovakin est de ' .$dovakin->vie;
echo'</pre>';
echo'<pre>';
echo'le minion attaque';
echo'</pre>';
$minion->attaque($dovakin);
echo'<pre>';
echo'l armur  de dovakin ' . $dovakin->armur;
echo'</pre>';
$dovakin->bonus_armur();
echo'<pre>';
echo'l armur  de dovakin ' . $dovakin->armur;
echo'</pre>';

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


if($minion->vie <= 0){
   echo 'le minion est mort ';
}

//echo '<pre>';
//var_export($dovakin);
//var_export($minion);
//var_export($lieutenant);
//var_export($chef);
//echo '</pre>';
function combat(){

   $dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armur=0;

$chef = new Personnage("chef");
$chef->vie =100;
$chef->atk=100;
$chef->armur=0;

for($i= 1 ; $i <=5; $i++){
echo '<br>';
echo'round'($i);
echo'</br>';
 if($dovakin->vie<=0 || $chef->vie<=0){
    if($dovakin->vie <=0){
      
         $dovakin->vie =0;
      
      
   echo'<pre>';
       echo 'Votre héro es mort ';
     echo' </pre>';
    }
if($chef->vie<=0){
   echo'bravo';
}
break;
 }
 $shuffle_hp=rand(0,2);
 if($shuffle_hp ==1){
    echo 'votre hero recoit le bonus vie';
    echo'<br>';
    $dovakin->bonus_vie(50);
 }

 $shuffle_armor=rand(0,4);
 if($shuffle_armor ==1){
    echo 'votre hero recoit le bonus armur';
    echo'<br>';
    $dovakin->bonus_armur(20);
 }
 
 echo "La vie du héro est de : " .  $dovakin->vie . " et son armure est de " . $dovakin->armur;
 echo '<br>';
 echo  "La vie du chef minion est de :  " . $chef->vie;
 echo '<br>';

 echo '<br>';
 echo 'Votre héro attaque le chef minion ! ';
 $dovakin->attaque($chef);
 echo '<br>';
 echo 'Le chef minion attaque votre héro!  ';
 $chef->attaque($dovakin);
 echo '<br>';
 echo "La vie du héro est de : " .  $dovakin->vie . " et son armure est de " . $dovakin->armur;
 echo '<br>';
 echo  "La vie du chef minion est de :  " . $chef->vie;
 echo '<br>';
}
}

combat();
if($dovakin->vie < 0){
   $dovakin->vie =0;
}

function fight(){

   $dovakin = new Personnage("dovakin");
$dovakin->vie = 200;
$dovakin->atk=15;
$dovakin->armur=0;

$minion = new Personnage("minion");
$minion->vie =10;
$minion->atk=10;
$minion->armur=0;

for($i= 1 ; $i <=5; $i++){
echo '<br>';
echo'round'($i);
echo'</br>';
 if($dovakin->vie<=0 || $minion->vie<=0){
    if($minion->vie <=0){
      $minion->vie=0;
         
      
      
   echo'<pre>';
       echo 'Votre héro es mort ';
     echo' </pre>';
    }
if($minion->vie<=0){
   
   echo'bravo';
}
break;
 }
 $shuffle_hp=rand(0,2);
 if($shuffle_hp ==1){
    echo 'votre hero recoit le bonus vie';
    echo'<br>';
    $dovakin->bonus_vie(50);
 }

 $shuffle_armor=rand(0,4);
 if($shuffle_armor ==1){
    echo 'votre hero recoit le bonus armur';
    echo'<br>';
    $dovakin->bonus_armur(20);
 }
 
 echo "La vie du héro est de : " .  $dovakin->vie . " et son armure est de " . $dovakin->armur;
 echo '<br>';
 echo  "La vie du minionminion est de :  " . $minion->vie;
 echo '<br>';

 echo '<br>';
 echo 'Votre héro attaque le minion minion ! ';
 $dovakin->attaque($minion);
 echo '<br>';
 echo 'Le minion$minion minion attaque votre héro!  ';
 $minion->attaque($dovakin);
 echo '<br>';
 echo "La vie du héro est de : " .  $dovakin->vie . " et son armure est de " . $dovakin->armur;
 echo '<br>';
 echo  "La vie du minion minion est de :  " . $minion->vie;
 echo '<br>';
}
}

fight();
if($dovakin->vie < 0){
   $dovakin->vie =0;
}
