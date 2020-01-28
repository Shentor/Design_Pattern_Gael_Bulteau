<?php

namespace App\Http\Controllers;

use App\Models\Iterator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerIterator extends BaseController
{
    function affichage() {
        $ite = new Iterator(['opel', 'renault', 'peugeot']);

        return view('iterator', ['ite' => $ite]);
    }
}