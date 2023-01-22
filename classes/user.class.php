<?php 

    class User extends DatabaseContext{

        protected function getUser($name){

            $statement = $this->connection()->prepare("SELECT * FROM users WHERE name=:name");

            $statement->bindValue('name', $name, PDO::PARAM_STR);

            $statement->execute();

            if ($statement->rowCount() == 1) {
                
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

                    $_SESSION['user'] = $row;

                    $data[] = $row;
                    
                }
                
                return $data;
            
            }

        }

        protected function userUpdate($id, $name, $surname, $email, $phone, $city){

            $statement = $this->connection()->prepare("UPDATE users SET name=:name, surname=:surname, email=:email, phone=:phone, city=:city WHERE ID=:id");  

            $statement->bindValue('id', $id, PDO::PARAM_INT);

            $statement->bindValue('name', $name, PDO::PARAM_STR);

            $statement->bindValue('surname', $surname, PDO::PARAM_STR);

            $statement->bindValue('email', $email, PDO::PARAM_STR);

            $statement->bindValue('phone', $phone, PDO::PARAM_STR);

            $statement->bindValue('city', $city, PDO::PARAM_STR);

            try {
                if (!$statement->execute()) {
                    
                    $statement = null;
                    
                    header("location: ./edit-action-user.php?error=statementfailed");
                    
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