<?php

namespace App\Model;

use App\Model\Voiture;
use App\Model\Concession;
use App\Model\Facture;

class Commande {

    public function __Construct() {
        /*$voiture = Voiture::getPrix();
        $facture = Facture::addMontantVoiture($voiture);
        $concession = Concession::getVoiture(); */
    }

    public static function Commander($brand) {
        
        $voiture = Usine::createBrand($brand);
        $concession = new Concession();
        $concession->addVoiture($voiture);
        $facture = new Facture();
        $facture->addMontantVoiture($voiture);
        
        return [$concession, $facture];
    }

}