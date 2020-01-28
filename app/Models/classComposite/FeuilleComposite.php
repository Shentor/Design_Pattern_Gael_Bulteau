<?php

namespace App\Models\classComposite;

use App\Models\classComposite\Composite;


class Feuille extends Composite {

    private $price;

    public function __construct($price){
        $this->price = $price;
    }


    public function getPrice() {
        return $this->price;
    }
}