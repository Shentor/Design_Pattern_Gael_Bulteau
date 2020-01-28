<?php

namespace App\Models\classFacade;



class Concession{

    private $concession;

    public function __construct($conc){

        $this->concession = $conc;

    }

    public function getConcession(){
        return $this->concession;
    }
}