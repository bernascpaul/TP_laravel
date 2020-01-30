<?php

namespace App\Model;

use Exception;

class Usine {

    private $vehicule;
    private $vehiculeModel;



    public static function createBrand($brand) 
    {
        $nomClass = 'App\Model\\' . $brand;

        switch ($brand) {
            case 'Opel':
                $voiture = new Opel;
                break;
            case 'Renault':
                $voiture = new Renault;
                break;
            default :
                $voiture = new Opel;
        }
        return $voiture;

        if(class_exists($nomClass)) {
            return new $nomClass();
        } else {
            throw new Exception('Désolé, cette marque de voiture n\'existe pas');
        }
    }
}