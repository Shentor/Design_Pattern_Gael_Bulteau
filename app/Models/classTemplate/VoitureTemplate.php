<?php

namespace App\Models\classTemplate;

class VoitureTemplate {

    public function getText() {
        return $this->getMarque() . ' ' . $this->getOptions();
    }

    public function getMarque() {
        return 'null';
    }

    public function getOptions() {
        return 'null';
    }


}