<?php 

    class LoginController extends Login{

        private $name;
        
        private $email;
        
        private $password;

        public function __construct($name, $email, $password)
        {

            $this->name = $name;
            
            $this->email = $email;
            
            $this->password = $password;
        
        }


        public function login(){

            if ($this->checkInput() == false) {
                
                header("location: ../login.php?error=emptyinput");
            
                exit();

            }

            $this->getUser($this->name , $this->email, $this->password);

        }


        private function checkInput(){

            if (!$this->name) {
            
                return false;

            }
            else if (!$this->email) {
                
                return false;

            }

            return (bool) $this->password;

        }


    }

?>