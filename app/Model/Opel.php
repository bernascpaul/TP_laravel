<?php

namespace App\Model;

use App\Model\Voiture;

class Opel extends Voiture {

    public $brand = "Opel";
    public $price;

    public function __Construct() {
        $this->price = 2000;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getPrice() {
        return $this->price;
    }
    
}