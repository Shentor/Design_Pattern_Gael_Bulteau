<?php

namespace App\Models\classStrategy;

class RenaultStrategy {
    private $tva = "20%";
    
    public function getTVA(){
        return $this->tva;
    }
   
}