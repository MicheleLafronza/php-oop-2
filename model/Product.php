<?php

    require_once __DIR__ . '/../data/db.php';
    

    // classe principale per ogni prodotto
    class Product {

       protected string $name;
       protected float $price;
       protected string $description;

       public function __construct(string $_name, float $_price, string $_description)
       {
            $this->name = $_name;
            $this->price = $_price;
            $this->description = $_description;
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
    }