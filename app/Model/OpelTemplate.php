<?php

use App\Model\CarTemplate;

namespace App\Model;

class OpelTemplate extends CarTemplate {
    
    public function getMarque(){
        return 'Opel';
    }
    
    public function getOptions(){
        return 'GPS';
    }
}