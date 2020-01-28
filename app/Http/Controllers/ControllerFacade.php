<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerFacade extends BaseController
{
    function affichage() {
        $modele = 'Opel 2';
        $commande = new Facade($modele);
        $fin = $commande->getResult();
        return view('facade', ['commande' => $fin, 'modele' => $modele]);
    }
}