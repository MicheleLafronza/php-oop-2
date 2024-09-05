<?php

    class DogFood extends DogProduct{

        protected string $food_type;
        protected array $ingredients = [];

        public function __construct(string $_name, float $_price, string $_description, string $_size, string $_age, string $_food_type, array $_ingredients ){

            parent::__construct($_name, $_price, $_description, $_size, $_age);

            $this->food_type = $_food_type;
            $this->ingredients = $_ingredients;
        }

        // GETTERS

        public function getFoodDogType(){

            return $this->food_type;

        }

        public function getFoodDogIngrendients(){

            return $this->ingredients;

        }
    }