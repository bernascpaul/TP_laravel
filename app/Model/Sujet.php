<?php

namespace App\Model;

class Sujet {

    private $oberv = [];
    
    public function register($obs) {
        $this->observ[] = $obs;
    }
    
    public function unregister($obs) {
        unset($this->observ[$obs]);
    }
    
    public function update() {
        foreach($this->observ as $tab){
            $tab->update();
        }
    }
}