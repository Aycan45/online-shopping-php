<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center m-5">
        <div class="col-5">
        <?php 
        if (isset($_GET['error']) == 'emptyinput' || isset($_GET['error']) == 'email') {
            ?>
                <p class="text-danger">Please, fill your credentials</p>
            <?php
        }
    ?>
    <form action="user-actions/register-action.php" method="post">
    <label for="name" class="form-label">Name:</label>
        <div class="mb-3">
            <input type="text" name="name" class="col-8 p-1">
        </div>
    <label for="surname" class="form-label">Surname:</label>
        <div class="mb-3">
            <input type="text" name="surname" class="col-8 p-1">
        </div>
    <label for="email" class="form-label">Email:</label>
        <div class="mb-3">
            <input type="email" name="email" class="col-8 p-1">
        </div>
    <label for="phone" class="form-label">Phone:</label>
        <div class="mb-3">
            <input type="tel" name="phone" pattern="+[0-9]{12}" class="col-8 p-1">
        </div>
    <label for="city" class="form-label">City:</label>
        <div class="mb-3">
            <input type="text" name="city" class="col-8 p-1">
        </div>
    <label for="password" class="form-label">Password:</label>
        <div class="mb-3">
            <input type="password" name="password" class="col-8 p-1">
        </div>
        <div class="mb-3">
            <a href="login.php">Already have an account?</a>
        </div>
        <div class="mb-3">
            <a href="index.php">Back to main page</a>
        </div>
        <div class="col-7 mx-auto">
            <input type="submit" name="register" class="btn btn-primary col-5" value="Register">
        </div>
    </form>
        </div>
    </div>
</body>
</html>