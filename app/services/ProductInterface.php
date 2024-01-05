<?php


interface ProductInterface {
    public function getAllproduct();
    public function addproduct(product $product);
    public function deleteproduct($productId);
    public function updateproduct(product $updatedproduct);
    
    public function countproducts();

}


?>