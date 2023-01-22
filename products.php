<?php 

include('./includes/header.include.php');

include("./classes/databasecontext.class.php");

include("./classes/product.class.php");

include("./controllers/product.controller.php");

$product = new ProductController;

$product->items();


?>