<?php

class Archer extends Personnage {


    public $vie = 40;
    public $mem = 40;
    public $memo = 40;





    public function attaque($cible){

       
       
        $cible->vie -=  2 * $this->ateck;
        $cible->vie -=  2 * $this->atok;

    

         
     }
     


}