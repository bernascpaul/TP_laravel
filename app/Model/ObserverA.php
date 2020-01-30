<?php

namespace App\Model;

class ObserverA {
    private $text = "ObsA-empty";
    
    public function update() {
        $this->text = "ObsA-updated";
    }
    
    public function getText() {
        return $this->text;
    }
}