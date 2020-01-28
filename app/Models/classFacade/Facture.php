<?php

namespace App\Models\classFacade;



class Facture{

    private $prix;

    public function __construct($modele){

        $this->prix = $modele;

    }

    public function getFacture(){
        return $this->prix;
    }

}