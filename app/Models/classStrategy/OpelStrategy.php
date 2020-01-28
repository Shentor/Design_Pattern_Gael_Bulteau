<?php

namespace App\Models\classStrategy;

class OpelStrategy {
    private $tva = "10%";
    
    public function getTVA(){
        return $this->tva;
    }
   
}