<?php

namespace App\Models;

class Iterator {
    private $index = -1;
    private $array = [];
    public function __construct($array)
    {
        $this->array = $array;
    }
    public function hasNext(): bool
    {
        return isset($this->array[$this->index + 1]);
    }
    public function next()
    {
        $this->index++;
        return $this->array[$this->index];
    }
}