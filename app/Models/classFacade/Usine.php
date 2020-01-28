<?php

namespace App\Models\classFacade;

use App\Models\classFactory;
use App\Models\classFactory\Opel;
use App\Models\classFactory\Renault;

class Usine{

    private $voiture;

    public function fabrication($parametre){
        switch ($parametre){
            case "opel":
                $this->voiture = new Opel();
            break;

            case "renault":
                $this->voiture = new Renault();
            break;

            default:
            echo('raté');
            
        }
    }

    public function getVoiture(){
        return $this->voiture;
    }

}