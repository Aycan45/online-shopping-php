<?php 

if (isset($_POST['register'])) {
    
    $name = $_POST['name'];
    
    $surname = $_POST['surname'];
    
    $email = $_POST['email'];
    
    $phone = $_POST['phone'];
    
    $city = $_POST['city'];
    
    $password = $_POST['password'];

    session_start();

    $_SESSION['name'] = $name;

    include('../classes/databasecontext.class.php');
    
    include('../classes/register.class.php');
    
    include('../controllers/register.controller.php');
    
    $register = new RegisterController($name, $surname, $email, $phone, $city, $password);
    
    $register->registerUser();

    header("location: ../index.php");
    
    exit;

}






?>