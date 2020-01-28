<?php

use App\Models\classTemplate\VoitureTemplate;

namespace App\Models\classTemplate;

class OpelTemplate extends VoitureTemplate {

    public function getMarque(){
        return 'Opel';
    }

    public function getOptions(){
        return 'automatique';
    }

}