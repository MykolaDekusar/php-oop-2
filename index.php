<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';

// definizione categoria
$categoria_cane = new Category('Cani', 'icona-cane');
$categoria_gatto = new Category('Gatti', 'icona-gatto');

$products = new Product('Il mio primo prodotto', $categoria_cane);
$cibo = new Food('Carne, Erba', 1230);
var_dump($cibo);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <h1>Pet Shop</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-4">
                        <!-- card vendita -->
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>