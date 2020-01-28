<?php

namespace App\Models\classObserver;

class Sujet {
    private $obervers = [];
    
    public function registerObs($obs){
        $this->observers[] = $obs;
    }

    public function unregisterObs($obs){
       
                unset($this->observers[$obs]);
            }
        
    

    public function updateObs() {
        foreach($this->observers as $tab){
            $tab->update();
        }
    }


    
}