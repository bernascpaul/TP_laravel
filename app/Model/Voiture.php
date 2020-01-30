<?php

namespace App\Model;

class Voiture {

    public $prix = 150000;

    public function getPrix()
    {
        return $this->prix;
    }
}