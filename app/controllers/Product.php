<?php

class Product extends Controller
{

    private $productService;
    private $categoryservice;

    public function __construct()
    {
        $this->productService = new productService();
        $this->categoryservice = new CategoryService();
    }

    public function addproduct()
    {
        $cat =  $this->categoryservice->displayCategory();
        $this->productService = new productService();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Name = $_POST["ProductsName"];
            $Descr = $_POST["ProductDescription"];
            $price = $_POST["ProductPrice"];
            $img = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $category = $_POST["Category"];

            $newProduct = new Product();
            $newProduct->Product_name = $Name;
            $newProduct->Product_descr = $Descr;
            $newProduct->Product_price = $price;
            $newProduct->Product_logo = URLROOT."public/images/".$img;
            $newProduct->Id_category = $category;

            try {
                $this->productService->addproduct($newProduct);
                header("Location:" . URLROOT . "admin/products");
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        $data = [
            "category" => $cat
        ];

        $this->view("products/addproduct", $data);
    }
}
