<?php

    class DogToy extends DogProduct{

        protected string $material;
        protected string $colour;

        public function __construct(string $_name, float $_price, string $_description, string $_image, string $_size, string $_age, string $_material, string $_colour)
        {
            parent::__construct($_name, $_price, $_description, $_image, $_size, $_age);

            $this->material = $_material;
            $this->colour = $_colour;
        }

        public function GetDogToyMaterial(){

            return $this->material;

        }

        public function GetDogToyColour(){

            return $this->colour;

        }

    }