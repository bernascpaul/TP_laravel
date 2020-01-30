<?php

namespace App\Model;

class Facture {

    public $montant = 0;

    public function addMontantVoiture($voiture)
    {
        $this->montant = $this->montant + $voiture->getPrice();
        return $this->montant;
    }

    public function getMontant()
    {
        return $this->montant;
    }
    
}