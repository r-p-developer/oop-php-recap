<?php

try {
    $products = [
        new Products("Magic5 Pro A14", "Honor", 1199, 10, "Bianco"),
        new Smartphone("iPhone", "Apple", 799, "A01234566", 6, 0, "Nero"),
        new Computers("ThinkPad", "Lenovo", 599, 15, 8),
        new Products("Macbook", "Apple", 1599, 5, "Grigio"),
        new Products("Macbook Air", "Apple", 1899, 0, "Argento")
    ];

    $products[0]->addCategory("Smartphone");
    $products[0]->addCategory("Elettronica");

    $products[1]->addCategory("Smartphone");
    $products[1]->addCategory("Elettronica");

    $products[2]->addCategory("Computer");
    $products[2]->addCategory("Portatile");

    $products[3]->addCategory("Computer");
    $products[3]->addCategory("Portatile");
} catch(Exception $e) {
    die("Si è verificato un errore: " . $e->getMessage());
}