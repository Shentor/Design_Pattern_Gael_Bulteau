<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ControllerCommand extends BaseController
{
    function affichage() {
        return view('command');
    }
}