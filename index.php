<?php

require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/model/Product.php';
require_once __DIR__ . '/model/DogProduct.php';
require_once __DIR__ . '/model/CatProduct.php';
require_once __DIR__ . '/model/DogFood.php';

var_dump($db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pet Shop</title>
</head>
<body>

<!-- main container -->
    <div class="container">

        <!-- titolo principale -->
        <h1 class="text-center">Pet Shop</h1>

        <!-- sezione cani -->
        <div class="row">

            <!-- scheda prodotto -->
            
            <div class="card col-4">
                <!-- immagine prodotto -->
                <img src="..." class="card-img-top" alt="...">
                <!-- dettagli prodotto -->
                <div class="card-body">
                    <h5 class="card-title">Titolo</h5>

                    <p class="card-text">Testo 1</p>
                    
                    <p class="card-text">Testo 2</p>
                    
                    <a href="#" class="btn btn-primary">Compra</a>
                </div>
            </div>
           

        </div>


    </div>


</body>
</html>