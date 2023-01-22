<?php 
    include("../classes/databasecontext.class.php");

    include("../classes/product.class.php");
    
    include("../controllers/product.controller.php");

    if (isset($_POST['add'])) {

        $product = new ProductController;
        
        $title = $_POST['title'];

        $description = $_POST['description'];

        $imageName = $_FILES['myFile']['name'];

        $image = '../images/' . $imageName;

        $extension = pathinfo($imageName, PATHINFO_EXTENSION);

        $file = $_FILES['myFile']['tmp_name'];

        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            echo "<script>alert(Your file extension must be .jpg, .jpeg, .png)</script>";
        }
        else{
            if (move_uploaded_file($file, $image)) {
            
                $imagePath = 'images/' . $imageName;

                $product->addProduct($title, $description, $imagePath);

                header('location: ../add-product.php');
            }
            else{
                echo "<script>alert(File not uploaded succesfully)</script>";
                header('refresh: 2 url=../add-product.php?error=uploadfailed');
            }
        }
    }


?>