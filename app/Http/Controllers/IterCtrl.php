<?php

namespace App\Http\Controllers;
use App\Model\Iterator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IterCtrl extends BaseController {
    function affichage() {
        $iter = new Iterator(['opel', 'renault', 'kia']);
        
        return view('iterator', [
            'iteration' => $iter
        ]);
    }
}