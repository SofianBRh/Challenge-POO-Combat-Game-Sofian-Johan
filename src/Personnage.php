<?php


namespace App;



class Personnage{
public $nom;
public $vie ;
public $atk ;
public $armur ;

public function __construct($nom){
    $this->nom = $nom;
}
public function bonus_vie($vie = null){
    if(is_null($vie)){

        $this->vie = 200;
    }else{
        $this->vie += $vie;
    }
}
public function bonus_armur($armur){
    $this->armure = 0;
}
public function mort(){
 return $this->vie=0;
    
}
private function negatif(){
    if($this->vie < 0){
        $this->vie =0;
    }
}

public function getVie(){
    return $this->vie;
}

public function attaque($cible){
    $cible->vie -= $this->atk -$cible->armure;
    $cible->armure =0 ;
}



}
