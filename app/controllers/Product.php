<?php

class Product extends Controller {
    
    private $productService;
    public function __construct(){
        $this->productService = new productService();
    }

    public function addproduct(){
        echo"test";
        $this->productService = new productService();
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            $Name = $_POST["ProductsName"];
            $price = $_POST["ProductPrice"];
            $Descr = $_POST["ProductDescription"];
            $img = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            
                       $newProducts = new Product();
                       $newProducts->Product_name = $Name;
                       $newProducts->Product_price = $price;
                       $newProducts->Product_descr = $Descr;
                       $newProducts->Product_logo = $img;
                       try{
                        $this->productService->addproduct($newProducts);
                        header("Location:".URLROOT."admin/products");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
                    }
        
        $this->view("products/addproduct");
    }


}