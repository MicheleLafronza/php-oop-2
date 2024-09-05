<?php

require_once __DIR__ . '/../model/Product.php';
require_once __DIR__ . '/../model/DogProduct.php';
require_once __DIR__ . '/../model/CatProduct.php';
require_once __DIR__ . '/../model/DogFood.php';

$db = [
    new DogProduct('prodotto cane', 10.00, 'descrizione prodotto cane', 'taglia cane', 'adult'),
    new CatProduct('prodotto gatto', 11.00, 'descrizione prodotto gatto', 'taglia gatto', 'cucciolo'),
    new DogFood('cibo cane', 12.00, 'descrizione cibo cane', 'taglia cane', 'adulto', 'croccantini cane', ['manzo', 'pollo'])
];