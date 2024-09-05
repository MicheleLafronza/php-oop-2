<?php

    class Category extends Animal{

        public $category;

        public function __construct(string $_title, float $_price, string $_description, string $_image, string $_animal, string $_category){

            parent::__construct( $_title, $_price, $_description,  $_image, $_animal);

            $this->category = $_category;

        }

        // getter
        public function getCategory(){

            return $this->category;

        }
        
    }

?>