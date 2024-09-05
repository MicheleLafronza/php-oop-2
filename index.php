<?php

require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/model/Product.php';
require_once __DIR__ . '/model/Animal.php';
require_once __DIR__ . '/model/Category.php';



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
            <?php foreach($products as $product): ?>
            <div class="card col-4">
                <!-- immagine prodotto -->
                <img src="<?php echo $product->getImg() ?>" class="card-img-top" alt="...">
                <!-- dettagli prodotto -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->getTitle()?></h5>
                    <p class="card-text"><?php echo $product->getDes()?></p>
                    <?php
                    if ($product->getAnimal() == 'dog'):
                        echo '<i class="fa-solid fa-dog"></i>';
                    elseif ($product->getAnimal() == 'cat'):
                        echo '<i class="fa-solid fa-cat"></i>';
                    endif;
                    ?>
                    <p class="card-text"><?php echo $product->getPrice()?></p>
                    <p class="card-text"><?php echo $product->getCategory()?></p>
                    <a href="#" class="btn btn-primary">Compra</a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>


    </div>


</body>
</html>