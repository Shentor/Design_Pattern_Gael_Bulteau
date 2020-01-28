<?php

namespace App\Models\classComposite;

use App\Models\classComposite\Composite;


class Noeud extends Composite{

    public $enfants = [];
    public $price;


    public function getPrice() {
        foreach($this->enfants as $un_enfant) {
            $this->price += $un_enfant->getPrice();
        }
        return $this->price;
    }


    public function createEnfant($price) {
        $leaf = new Feuille($price);
        array_push($this->enfants, $leaf);
        return $leaf;
    }
}