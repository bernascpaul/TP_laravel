<?php

namespace App\Model;

use App\Model\Voiture;

class Concession {

    public $voitures = [];

    public $nom = "Cherbourg";

    public function getName() 
    {
        return $this->nom;
    }

    public function addVoiture(Voiture $voiture)
    {
        $voitures[] = $voiture;
    }

    public function getVoitures()
    {
        return $voitures;
    }
}