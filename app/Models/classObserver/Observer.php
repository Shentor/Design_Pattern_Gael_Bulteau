<?php

namespace App\Models\classObserver;

class Observer {
    private $text = "unchanged";
    
    public function update(){
        $this->text = "updated";
    }

    public function getText(){
        return $this->text;
    }
}