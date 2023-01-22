<?php 
    include('./includes/header.include.php');

    include("./classes/databasecontext.class.php");
    
    include("./classes/user.class.php");
    
    include("./controllers/user.controller.php");

    $user = new UserController($_SESSION['name']);

    $user->user();
?>