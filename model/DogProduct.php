<?php


    class DogProduct extends Product{

        protected string $animal = 'dog';
        protected string $size;
        protected string $age;

       public function __construct(string $_name, float $_price, string $_description, string $_image, string $_size, string $_age)
        {
            parent::__construct($_name, $_price, $_description, $_image);

            $this->size = $_size;
            $this->age = $_age;
        }

        // GETTERS

        public function getDogSize(){

            return $this->size;

        }

        public function getDogAge(){

            return $this->age;

        }

        public function getAnimal(){

            return $this->animal;

        }

    }