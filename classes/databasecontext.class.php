<?php 
class DatabaseContext{
    
    protected function connection(){
        try {

            $username = 'root';
            
            $password = '';

            $databasecontext = new PDO("mysql:host=localhost; dbname=shopping", $username, $password);

            return $databasecontext;
            
        } catch (PDOException $e) {
            
            echo "Error" . $e->getMessage() . "<br/>";
            
            die();

        }       
    }
}

?>