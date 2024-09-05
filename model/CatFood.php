<?php

    class CatFood extends CatProduct{

        protected string $food_type;
        protected array $ingredients = [];

        public function __construct(string $_name, float $_price, string $_description, string $_image, string $_size, string $_age, string $_food_type, array $_ingredients ){

            parent::__construct($_name, $_price, $_description, $_image, $_size, $_age);

            $this->food_type = $_food_type;
            $this->ingredients = $_ingredients;
        }

        // GETTERS

        public function getFoodCatType(){

            return $this->food_type;

        }

        public function getFoodCatIngrendients(){

            return $this->ingredients;

        }

    }