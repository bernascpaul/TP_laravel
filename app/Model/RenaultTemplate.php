<?php

use App\Model\CarTemplate;

namespace App\Model;

class RenaultTemplate extends CarTemplate {
    
    public function getMarque(){
        return 'Renault';
    }
    
    public function getOptions(){
        return 'Bluetooth';
    }
}