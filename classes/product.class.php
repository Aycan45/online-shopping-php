<?php 

    class Product extends DatabaseContext{

        protected function getProducts(){

            $statement = $this->connection()->prepare("SELECT * FROM item");
            
            $statement->execute();

            if ($statement->rowCount() > 0) {
                
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        
                    $data[] = $row;
                    
                }
                
                return $data;
            
            }
            else {

                echo "No records";

            }

        }

        protected function getProduct($title){

            $statement = $this->connection()->prepare("SELECT * FROM item WHERE title=:title");

            $statement->bindValue('title', $title, PDO::PARAM_STR);

            $statement->execute();

            if ($statement->rowCount() == 1) {
                
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

                    $_SESSION['user'] = $row;

                    $data[] = $row;
                    
                }
                
                return $data;
            
            }

        }

        protected function productUpdate($id, $title, $description, $image){

            $statement = $this->connection()->prepare("UPDATE item SET title=title, description=:description, images=:image WHERE ID=:id");  
        
            $statement->bindValue('id', $id, PDO::PARAM_INT);

            $statement->bindValue('title', $title, PDO::PARAM_STR);

            $statement->bindValue('description', $description, PDO::PARAM_STR);

            $statement->bindValue('image', $image, PDO::PARAM_STR);

            try {
                if (!$statement->execute()) {
                    $statement = null;
                    header("location: ../update-product.php?error=stmtfailed1");
                    exit();
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }

            $statement=null;
            
        }


        protected function setProduct($title, $description, $image)
        {

            $statement = $this->connection()->prepare("INSERT INTO item (`title`, `description`, `images`) VALUES (:title,:description, :image);");  
        
            $statement->bindValue('title', $title, PDO::PARAM_STR);

            $statement->bindValue('description', $description, PDO::PARAM_STR);

            $statement->bindValue('image', $image, PDO::PARAM_STR);

            try {
                if (!$statement->execute()) {
                    $statement = null;
                    header("location: ../add-product.php?error=stmtfailed1");
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