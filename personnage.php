<?php

//class jeux
class jeux{
    public $nom1;
    public $vie = 100;
public $attack = 20;

    public function _construct($nom1) {
        $this->nom = $nom1;
    }
//creation de la fonction fight

public function attack($cible){
    $cible->vie -= $this->attack;
}
public function vie(){
if ($this->vie <= 0) {
    $vie = $this->nom."vie joueur";
}else{
    $gagnant = $this->nom. "pv gagnant" . $this->vie ."vie du joueur";
}
return $vie;
}
}




