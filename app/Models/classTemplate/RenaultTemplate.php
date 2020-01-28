<?php

use App\Models\classTemplate\VoitureTemplate;

namespace App\Models\classTemplate;


class RenaultTemplate extends VoitureTemplate {

    public function getMarque(){
        return 'Renault';
    }

    public function getOptions(){
        return '4x4';
    }

}