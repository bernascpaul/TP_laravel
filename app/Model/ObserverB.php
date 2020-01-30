<?php

namespace App\Model;

class ObserverB {
    private $text = "ObsB-empty";
    
    public function update() {
        $this->text = "ObsB-updated";
    }
    
    public function getText() {
        return $this->text;
    }
}