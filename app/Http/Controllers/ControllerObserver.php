<?php

namespace App\Http\Controllers;

use App\Models\classObserver\Observer;
use App\Models\classObserver\Sujet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerObserver extends BaseController
{
    function affichage() {
        $sujet = new Sujet();
        $obs1 = new Observer();
        $obs2 = new Observer();
        $sujet->registerObs($obs1);
        $sujet->registerObs($obs2);

        return view('observer', ['sujet' => $sujet, 'obs1' => $obs1, 'obs2' => $obs2]);
    }
}