<?php

namespace App\Models;

use App\Models;
use App\Models\classFacades;
use App\Models\classFacade\Usine;
use App\Models\classFacade\Facture;
use App\Models\classFacade\Concession;

class Facade{

    private $result = [];

    public function __construct($modele){

        if ($modele == 'Opel 1'){
            $conce = new Concession('Chez bebert');
            $conc = $conce->getConcession();

            $faca = new Facture('25000€');
            $fac = $faca->getFacture();

            $constr = new Usine;
            $constr->fabrication('opel');
            $voiture = $constr->getVoiture();
        }
        if ($modele == 'Opel 2'){
            $conce = new Concession('Chez fanfan');
            $conc = $conce->getConcession();

            $faca = new Facture('80€');
            $fac = $faca->getFacture();

            $constr = new Usine;
            $constr->fabrication('opel');
            $voiture = $constr->getVoiture();
        }
        if ($modele == 'Renault 1'){
            $conce = new Concession('Chez michmich');
            $conc = $conce->getConcession();

            $faca = new Facture('99999€');
            $fac = $faca->getFacture();

            $constr = new Usine;
            $constr->fabrication('renault');
            $voiture = $constr->getVoiture();
        }
        if ($modele == 'Renault 2'){
            $conce = new Concession('Chez johnny');
            $conc = $conce->getConcession();

            $faca = new Facture('321000€');
            $fac = $faca->getFacture();

            $constr = new Usine;
            $constr->fabrication('renault');
            $voiture = $constr->getVoiture();
        }
        

        $this->result = [$conc, $fac, get_class($voiture)];

    }

        public function getResult(){
            return $this->result;
        }

}