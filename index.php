<?php

require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/model/Product.php';
require_once __DIR__ . '/model/DogProduct.php';
require_once __DIR__ . '/model/CatProduct.php';
require_once __DIR__ . '/model/DogFood.php';
require_once __DIR__ . '/model/CatFood.php';
require_once __DIR__ . '/model/DogToy.php';
require_once __DIR__ . '/model/CatToy.php';

// var_dump($db);

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

    <div class="row">
        <?php foreach ($db as $product): ?>
            <!-- scheda prodotto -->
            <div class="card col-4">
                <!-- immagine prodotto -->
                <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                <!-- dettagli prodotto -->
                <div class="card-body">

                    <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                    <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?> €</p>
                    <p class="card-text">Descrizione: <?php echo $product->getDes(); ?></p>

                    <!-- specifiche per cane o gatto -->
                    <?php if ($product instanceof DogProduct): ?>
                        <p class="card-text">Taglia: <?php echo $product->getDogSize(); ?></p>
                        <p class="card-text">Età: <?php echo $product->getDogAge(); ?></p>
                        <i class="fa-solid fa-dog"></i>
                    <?php elseif ($product instanceof CatProduct): ?>
                        <p class="card-text">Taglia: <?php echo $product->getCatSize(); ?></p>
                        <p class="card-text">Età: <?php echo $product->getCatAge(); ?></p>
                        <i class="fa-solid fa-cat"></i>
                    <?php endif; ?>

                    <!-- specifiche per cibo -->
                    <?php if ($product instanceof DogFood): ?>
                        <p class="card-text">Tipo di cibo: <?php echo $product->getFoodDogType(); ?></p>
                        <p class="card-text">Ingredienti: <?php echo implode(', ', $product->getFoodDogIngrendients()); ?></p>
                    <?php elseif ($product instanceof CatFood): ?>
                        <p class="card-text">Tipo di cibo: <?php echo $product->getFoodCatType(); ?></p>
                        <p class="card-text">Ingredienti: <?php echo implode(', ', $product->getFoodCatIngrendients()); ?></p>
                    <?php endif; ?>

                    <!-- specifiche per giocattoli -->
                    <?php if ($product instanceof DogToy): ?>
                        <p class="card-text">Materiale: <?php echo $product->GetDogToyMaterial(); ?></p>
                        <p class="card-text">Colore: <?php echo $product->GetDogToyColour(); ?></p>
                    <?php elseif ($product instanceof CatToy): ?>
                        <p class="card-text">Materiale: <?php echo $product->GetCatToyMaterial(); ?></p>
                        <p class="card-text">Colore: <?php echo $product->GetCatToyColour(); ?></p>
                    <?php endif; ?>
                    
                    <a href="#" class="btn btn-primary">Compra</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

</body>
</html>
