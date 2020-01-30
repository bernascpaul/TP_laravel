<?php

namespace App\Http\Controllers;

use App\Model\Facture;
use App\Model\Voiture;
use App\Model\Commande;
use App\Model\Concession;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FacaCtrl extends BaseController {
    public function Command($brand) {

        $commande = Commande::Commander($brand);

        $concession = $commande[0];
        $facture = $commande[1];

        $nameConcess = $concession->getName();
        $price = $facture->getMontant();
        
        return view('facade', [
            'concession' => $nameConcess,
            'price' => $price,
        ]);
    }

}