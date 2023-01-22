<?php 

class Login extends DatabaseContext{

    protected function getUser($name, $email, $password){

        $statement = $this->connection()->prepare("SELECT * FROM users WHERE email=:email AND name=:name");

        $statement->bindValue('name', $name);

        $statement->bindValue('email', $email);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        try {
            
            if (!$statement->execute()) {
                
                $statement = null;

                header('location: ../login.php?error=statementfailed');

                exit();

            }

        } catch (Exception $ex) {
            
            echo $ex->getMessage();

            header("location: ../login.php");

        }

        if ($statement->rowCount() == 0) {
            
            header("location: ../login.php?error=loginfailed");

        }
        else if($statement->rowCount() == 1){

            if (password_verify($password, $result["password"])) {

                session_start();

                $_SESSION['id'] = $result['ID'];

                $_SESSION['name'] = $result['name'];

                header("location: ../index.php");

            }
            else {

                header("location: ../login.php?error=loginfailed");
                
            }
        }
        
        }

    }

?>