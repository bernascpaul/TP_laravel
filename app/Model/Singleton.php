<?php

namespace App\Model;

class Singleton {
    private static $instance;

    private $compteur = 0;

    public static function getInstance() {
        if (self::$instance === null){
            self::$instance = new Singleton();
        }
        return self::$instance;
        /* return new Singleton(); */
    }

    private function __construct() {
    }

    public function increment() {
        /*$this->compteur+=1;
        return $this->compteur;*/
        $this->compteur = $this->compteur + 1;
        return $this->compteur;
    }
}