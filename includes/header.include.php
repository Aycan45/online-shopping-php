<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uni shopping.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <header>
        <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/shopping.png" alt="Bootstrap" width="40" height="35">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse p-2" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link" href="index.php">Home</a>

                <?php
                 if(isset($_SESSION['name'])){
                ?>
                    <a class="nav-link">Hello, <?php echo $_SESSION['name'];?></a>
                    <a class="nav-link" href="edit-user.php">Edit Profile</a>
                    <a class="btn btn-success" href="add-product.php" role="button">Add Product</a>
                    <a class="nav-link" href="user-actions/logout.php">Logout</a>
                <?php
                 }
                 else{
                ?>
                    <a class="nav-link" href="login.php">Login</a>
                    <a class="nav-link" href="register.php">Register</a>
                <?php
                 }
                ?>
            </div>
        </div>
        </nav>
  </header>