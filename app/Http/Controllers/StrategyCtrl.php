<?php

namespace App\Http\Controllers;

use App\Model\FactureLine;
use Illuminate\Routing\Controller as BaseController;

class StrategyCtrl extends BaseController {

    function affichage() {

        $factureOpel = new FactureLine('Opel');
        $factureRenault = new FactureLine('Renault');
        
        return view('strategy', ['opel' => $factureOpel, 'renault' => $factureRenault]);
    }
}