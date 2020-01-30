<?php

namespace App\Model;

use App\Model\OpelStrategy;
use App\Model\RenaultStrategy;

use App\Model\Opel;
use App\Model\Renault; 

class FactureLine {

    private $strat = null;

    public function __construct($brand){

        switch ($brand) {
            case "Opel":
                $this->strat = new OpelStrategy();
            break;            
            case "Renault":
                $this->strat = new RenaultStrategy();
            break;            
            default:
                echo('erreur');
        }
    }

    public function getStrategy(){
        return $this->strat->getTVA();
    }
}