<?php

namespace App\Model;

use App\Model\Voiture;

class Renault extends Voiture {

    public $brand = "Renault";

    public function __Construct() {
        $this->price = 1000;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getPrice() {
        return $this->price;
    }

}