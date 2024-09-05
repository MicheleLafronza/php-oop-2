<?php

    // classe cane
    class Animal extends Product {

        public $animal;

        public function __construct(string $_title, float $_price, string $_description, string $_image, string $_animal){
            
            parent::__construct($_title, $_price,  $_description, $_image);

            $this->animal = $_animal;


        }

        // getter
        public function getAnimal(){
            return $this->animal;
        }
       
    }