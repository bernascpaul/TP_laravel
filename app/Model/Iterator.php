<?php

namespace App\Model;

class Iterator {
    
    private $arr = [];
    private $idx = -1;
    
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function hasNext(): bool
    {
        return isset($this->arr[$this->idx + 1]);
    }

    public function next()
    {
        $this->idx++;
        return $this->arr[$this->idx];
    }
    
}