<?php 
    include('./classes/databasecontext.class.php');
    include('./classes/product.class.php');
    include('./controllers/product.controller.php');

    $products = new ProductController;

    $products->items();

?>