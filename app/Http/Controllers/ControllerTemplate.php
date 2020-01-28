<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTemplate\OpelTemplate;
use App\Models\classTemplate\RenaultTemplate;


class ControllerTemplate extends Controller{

    function affichage() {
        $opel = new OpelTemplate();
        $renault = new RenaultTemplate();

        return view('template', ['opel' => $opel, 'renault' => $renault]);
    }
}