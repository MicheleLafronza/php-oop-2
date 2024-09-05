<?php

    require_once __DIR__ . '/../data/db.php';
    

    // classe principale per ogni prodotto
    class Product {

        // usiamo protected per passarle alle classi figlio
        protected string $title;
        protected float $price;
        protected string $description;
        protected string $image;

        public function __construct(string $_title, float $_price, string $_description, string $_image){

            $this->title = $_title;
            $this->price = $_price;
            $this->description = $_description;
            $this->image = $_image;
        }

        // getter
        public function getTitle(){
            return $this->title;
        }

        public function getPrice(){
            return "Prezzo: $this->price €";
        }

        public function getDes(){
            return $this->description;
        }

        public function getImg(){
            return $this->image;
        }


    }