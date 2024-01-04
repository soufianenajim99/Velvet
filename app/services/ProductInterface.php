<?php


interface ProductInterface {
    public function getAllproduct();
    public function countproducts();
    public function addproduct(product $product);
    public function deleteproduct($productId);
    public function updateproduct(product $updatedproduct);

}


?>