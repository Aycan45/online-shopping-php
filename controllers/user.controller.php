<?php 

    class UserController extends User{

        private $name;

        public function __construct($name){

            $this->name = $name;

        }


        public function user(){

            $user = $this->getUser($this->name);

            foreach((array) $user as $row){

                include('./includes/edit-form.include.php');

            }

        }

        public function editUser($id, $name, $surname, $email, $phone, $city){

            $this->userUpdate($id, $name, $surname, $email, $phone, $city);

        }


    }

?>