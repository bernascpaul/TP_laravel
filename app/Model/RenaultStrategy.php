<?php

namespace App\Model;

class RenaultStrategy {

    private $tva = "20%";
    
    public function getTVA(){
        return $this->tva;
    }
}