<?php

class Food extends Animal {

    public $food;

    public function __construct(string $_title, float $_price, string $_description, string $_image, string $_animal, string $_food){
            
        parent::__construct($_title, $_price,  $_description, $_image, $_animal);

        $this->food = $_food;


    }

    // getter
    public function getFood(){
        return $this->food;
    }

}