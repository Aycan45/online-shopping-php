<?php 
     
     include("../classes/databasecontext.class.php");
     
     include("../classes/user.class.php");
     
     include("../controllers/user.controller.php");


     if (isset($_POST['edit']) && isset($_GET['id'])) {
    
        $id = intval($_GET['id']);

        $name = $_POST['name'];
        
        $surname = $_POST['surname'];
        
        $email = $_POST['email'];
        
        $phone = $_POST['phone'];
        
        $city = $_POST['city'];
    
        session_start();
    
        $_SESSION['name'] = $name;
        
        $userUpdate = new UserController($name);
        
        $userUpdate->editUser($id, $name, $surname, $email, $phone, $city);
    
        header("location: ../index.php");
        
        exit;
    
    }



?>