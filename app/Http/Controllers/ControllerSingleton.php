<?php

namespace App\Http\Controllers;

use App\Models\Singleton;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerSingleton extends BaseController
{
    function affichage() {
        return view('singleton', ['a' => Singleton::getInstance(), 'b' => Singleton::getInstance()]);
    }
}