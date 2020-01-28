<?php

namespace App\Models\classStrategy;

use App\Models\classStrategy\OpelStrategy;
use App\Models\classStrategy\RenaultStrategy;

class FactureLine {
    private $strategy = null;
    
    public function __construct($voiture){
        switch ($voiture) {
            case "Opel":
                $this->strategy = new OpelStrategy();
            break;

            case "Renault":
                $this->strategy = new RenaultStrategy();
            break;

            default:
            dd('erreur');
        }
    }

    public function getStrategy(){
        return $this->strategy->getTVA();
    }
   
}