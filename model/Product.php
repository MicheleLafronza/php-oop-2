<?php

    require_once __DIR__ . '/../data/db.php';
    

    // classe principale per ogni prodotto
    class Product {

       protected string $name;
       protected float $price;
       protected string $description;
       protected string $image;

       public function __construct(string $_name, float $_price, string $_description , string $_image)
       {
            $this->name = $_name;
            $this->price = $_price;
            $this->description = $_description;
            $this->image = $_image;
       }

       public function setPrice($price) {
          if (!is_float($price)) {
              throw new Exception("Il prezzo deve essere un numero");
          }
          $this->price = $price;
       }

    //    GETTERS
       public function getName(){

            return $this->name;

       }

       public function getPrice(){

            return $this->price;

       }

       public function getDes(){

            return $this->description;

       }

       public function getImage() {
          return $this->image;
      }
    }