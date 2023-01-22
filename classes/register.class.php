<?php 

    class Register extends DatabaseContext{

        protected function setUser($name, $surname, $email, $phone, $city, $password)
        {

            $statement = $this->connection()->prepare("INSERT INTO users (`name`, `surname`, `email`, `phone`, `city`, `password`) VALUES (:name,:surname,:email,:phone,:city,:password);");  
            
            $hashpassword = password_hash($password, PASSWORD_DEFAULT);

            $statement->bindValue('name', $name, PDO::PARAM_STR);

            $statement->bindValue('surname', $surname, PDO::PARAM_STR);

            $statement->bindValue('email', $email, PDO::PARAM_STR);

            $statement->bindValue('phone', $phone, PDO::PARAM_STR);

            $statement->bindValue('city', $city, PDO::PARAM_STR);

            $statement->bindValue('password', $hashpassword, PDO::PARAM_STR);

            try {
                if (!$statement->execute()) {
                    
                    $statement = null;
                    
                    header("location: ../register.php?error=statementfailed");
                    
                    exit();
                }
            } catch (Exception $e) {
                
                echo $e->getMessage();
                
                exit();

            }

            $statement=null;
            
        }



    }



?>