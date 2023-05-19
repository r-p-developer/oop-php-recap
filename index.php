<?php
require_once(__DIR__ . "/required.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-uppercase p-3 pb-0">
                    Prodotti
                </h3>
                <hr>
            </div>
                <?php foreach($products as $product) { ?>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="https://fakeimg.pl/350x200/eee/000?text=<?php echo $product->getType(); ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                                <p class="card-text">
                                    <?php if ($product->getDiscount() > 0) { ?>
                                        <span class="text-decoration-line-through"><?php echo $product->getPrice(true); ?></span>
                                        <br>
                                        <span><?php echo $product->discountPrice(true); ?></span>
                                    <?php } else { ?>
                                        <span><?php echo $product->getPrice(true); ?></span>
                                    <?php } ?>
                                </p>
                                <b>Categorie:</b>
                                <ul>
                                    <?php foreach ($product->getCategories() as $category) { ?>
                                        <li><?php echo $category; ?></li>
                                    <?php } ?>
                                </ul>
                                Caratteristiche:
                                <table class="table table-striped table-collapse">
                                    <tr>
                                        <td>Colore:</td>
                                        <td><?php echo $product->color; ?></td>
                                    </tr>
                                    <?php if ($product->hasImei()) { ?>
                                        <tr>
                                            <td>IMEI:</td>
                                            <td><?php echo $product->getImei(); ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if ($product->hasScreenSize()) { ?>
                                        <tr>
                                            <td>Schermo:</td>
                                            <td><?php echo $product->getScreenSize(); ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if ($product->hasRam()) { ?>
                                        <tr>
                                            <td>RAM:</td>
                                            <td><?php echo $product->getRam(); ?></td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </section>
</body>
</html>