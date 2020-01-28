<?php

namespace App\Http\Controllers;

use App\Models\Usine;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerFactory extends BaseController
{
    function affichage() {
        $opel = Usine::fabrication('opel');
        $renault = Usine::fabrication('renault');
        //$erreur = Usine::fabrication('erreur');
        return view('factory', ['opel' => $opel, 'renault' => $renault]);
    }
}