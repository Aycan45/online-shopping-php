<?php 

    if (isset($_POST['login'])) {
        
        $name = $_POST['name'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        session_start();

        include('../classes/databasecontext.class.php');

        include('../classes/login.class.php');

        include('../controllers/login.controller.php');

        $loginaction = new LoginController($name, $email, $password);

        $loginaction->login();

    }




?>