<?php

namespace App\Models\classComposite;

use App\Models\classComposite\Feuille;
use App\Models\classComposite\Noeud;

class Composite {

    private $price;
    private $enfants = [];
    private $feuilles = [];

    public function createNoeud(){
        $newNoeud = new Noeud();
        array_push($this->enfants, $newNoeud);
        return $newNoeud;
    }

    public function createFeuille($price){
        $newFeuille = new Feuille($price);
        array_push($this->feuilles, $newFeuille);
    }

    public function getPrice() {
        foreach($this->enfants as $un_enfant) {
            $this->price += $un_enfant->getPrice();
        }
        foreach($this->feuilles as $une_feuille) {
            $this->price += $une_feuille->getPrice();
        }
        return $this->price;
    }
}