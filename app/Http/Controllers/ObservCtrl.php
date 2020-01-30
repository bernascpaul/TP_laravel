<?php
namespace App\Http\Controllers;

use App\Model\ObserverA;
use App\Model\ObserverB;
use App\Model\Sujet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ObservCtrl extends BaseController {
    function affichage() {

        $sujet = new Sujet();

        $obs1 = new ObserverA();
        $obs2 = new ObserverB();

        $sujet->register($obs1);
        $sujet->register($obs2);        
        
        return view('observer', ['sujet' => $sujet, 'obs1' => $obs1, 'obs2' => $obs2]);
    }
}