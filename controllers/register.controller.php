<?php 

    class RegisterController extends Register{

        private $name;
        
        private $surname;
        
        private $email;
        
        private $phone;
        
        private $city;
        
        private $password;


    public function __construct($name, $surname, $email, $phone, $city, $password)
    {
        
        $this->name = $name;
        
        $this->surname = $surname;
        
        $this->email = $email;
        
        $this->phone = $phone;
        
        $this->city = $city;
        
        $this->password = $password;
    }

    public function registerUser()
    {
        if ($this->emptyInput() == false) {
            
            header("location: ../register.php?error=emptyinput");
            
            exit();
        
        }
        if ($this->invalidEmail() == false) {

            header("location: ../register.php?error=email");
            
            exit();
        }

        $this->setUser($this->name,$this->surname, $this->email,$this->phone,$this->city, $this->password);
    
    }

    private function emptyInput()
    {

        if (!$this->email) {
            
            return false;

        }
        
        if (!$this->name) {
        
            return false;
        
        }
        
        if (!$this->surname) {
        
            return false;
        
        }
        
        if (!$this->phone) {
        
            return false;
        
        }
        
        if (!$this->city) {
        
            return false;
        
        }
        
        return (bool) $this->password;
    
    }

    private function invalidEmail()
    {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
          
            return false;
        
        }
        else{
         
            return true;
        
        }
        
    }


    }


?>