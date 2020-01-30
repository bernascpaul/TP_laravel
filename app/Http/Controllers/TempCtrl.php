<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\OpelTemplate;
use App\Model\RenaultTemplate;

class TempCtrl extends Controller {
    
    function affichage() {
        
        $opel = new OpelTemplate();
        $renault = new RenaultTemplate();        
        
        return view('template', [
            'opel' => $opel,
            'renault' => $renault
        ]);
    }
}