<?php 

    class ProductController extends Product{

        public function items(){

            $product = $this->getProducts();

            foreach((array) $product as $row){

                include('./includes/products.include.php');

            }

        }

        public function item($title){

            $item = $this->getProduct($title);

            foreach((array) $item as $row){

                include('./includes/update-product.include.php');

            }

        }

        public function addProduct($title, $description, $images){

            if ($this->emptyInput($title, $description, $images) == true) {
                header("location: ../add-product.php?error=emptyinput");
                exit();
            }
            else
                $this->setProduct($title, $description, $images);
        }

        public function editProduct($id, $title, $description, $image){

            if ($this->emptyInput($title, $description, $image) == true) {
                header("location: ../add-product.php?error=emptyinput");
                exit();
            }


            $this->productUpdate($id, $title, $description, $image);

        }

        private function emptyInput($title, $description, $images)
        {
            
            if (!$title) {
            
                return false;
            
            }
            
            if (!$description) {
            
                return false;
            
            }
            
            if (!$images) {
            
                return false;
            
            }
        
        }

    }

?>