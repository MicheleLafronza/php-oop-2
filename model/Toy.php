<?php

    class Toy extends Animal{

        public $toy;

        public function __construct(string $_title, float $_price, string $_description, string $_image, string $_animal, string $_toy){

            parent::__construct( $_title, $_price, $_description,  $_image, $_animal);

            $this->toy = $_toy;

        }

        // getter
        public function getToy(){

            return $this->toy;

        }
        
    }

?>