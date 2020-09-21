<?php
class Personnage {


    const MAX_VIE = 100;

   protected $vie = 80;

   protected $atck = 30;

    private $nom;



    public function getvie(){

        return $this->vie;

    }

    public function getNom(){

        return $this->nom;

    }

    public function setNom($nom){

      $this->nom = $nom;

    }


    public function getatck(){

        return $this->atck;

    }


    public function __construct($nom){
        $this->nom = $nom;

    }

    public function regenerer($vie = null){

        if(is_null($vie)){
            $this->vie = self::MAX_VIE;

        } else {
            $this->vie += $vie;
        }

        
        
    }
    
    public function mort(){

       return $this->vie = $vie - $vie;
       
        
    }
    public function attaque($cible){

       
       
        $cible->vie -= $this->atck;

         
     }
     
    

}