<?php

namespace App\Model;

class OpelStrategy {
    
    private $tva = "10%";
    
    public function getTVA(){
        return $this->tva;
    }
}