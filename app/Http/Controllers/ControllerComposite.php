<?php

namespace App\Http\Controllers;

use App\Models\classComposite\Composite;
use Illuminate\Routing\Controller as BaseController;

class ControllerComposite extends BaseController
{
    function affichage() {
        $mother = new Composite();
        $mother->createFeuille('10');
        $node = $mother->createNoeud();
        $node->createEnfant('1');
        $leaf = $node->createEnfant('3');
        // $resTotal = $mother->getPrice();
        // $resNode = $node->getPrice();
        return view('composite', [ 'mother' => $mother, 'node' => $node, 'leaf' => $leaf]);
    }
}