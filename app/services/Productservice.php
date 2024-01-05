<?php
class ProductService {
    private $db;
    private $conn;
    public function __construct(){
  
  
  $this->db = Database::getInstance();
  $this->conn = $this->db->getConnection();
  
  
  }

    public function getAllproduct(){
        $conn = $this->conn;
        $query="SELECT * FROM product"; 
        $result=$conn->prepare($query);
        $result->execute();
        $product=$result->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }
    public function getCatProd(){
        $conn = $this->conn;
        $query = "SELECT DISTINCT product.*, category.*
        FROM product
        JOIN category ON product.Id_category = category.Id_category";


        $result=$conn->prepare($query);
        $result->execute();
        $CatProd=$result->fetchAll(PDO::FETCH_OBJ);
        return $CatProd;
    }

    
    public function addproduct(product $product){
        $conn = $this->conn;
        
        $addproductQuery = "INSERT INTO `product`(`Product_name`,`Product_descr`,`Product_price`,`Product_logo`,`Id_category`) 
        VALUES (:Product_name, :Product_descr, :Product_price, :product_logo, :Id_category)";
        
        $result = $conn->prepare($addproductQuery);
        $result->bindParam(":Product_name", $product->Product_name);
        $result->bindParam(":Product_descr", $product->Product_descr);
        $result->bindParam(":Product_price", $product->Product_price);
        $result->bindParam(":product_logo", $product->Product_logo);
        $result->bindParam(":Id_category", $product->Id_category);
        
  
     $result->execute();
     }

     public function deleteproduct($productId){
        $conn = $this->conn;
        $deleteproduct = "DELETE from product where Id_product = :productId";
        $results =$conn->prepare($deleteproduct);
        $results->bindparam(":productId",$productId,PDO::PARAM_INT);
        $results->execute();
     }
     
     public function updateproduct(product $updatedproduct ,$id) {
        $conn = $this->conn;
        

             $product_name = $updatedproduct->Product_name;
             $product_price = $updatedproduct->Product_price;
             $product_descr = $updatedproduct->Product_descr;
             $product_logo = $updatedproduct->Product_logo;
     
             $sql = "UPDATE product SET product_name = :product_name, product_price = :product_price, product_descr = :product_descr ,product_logo =:product_logo WHERE Id_product = :id";
             $results = $conn->prepare($sql);

             $results->bindParam(":product_name", $product_name,PDO::PARAM_STR);
             $results->bindparam(":product_price", $product_price,PDO::PARAM_STR);
             $results->bindparam(":product_descr", $product_descr,PDO::PARAM_STR);
             $results->bindparam(":product_logo", $product_logo,PDO::PARAM_STR);
             $results->bindparam(":id",$id,PDO::PARAM_INT); 
             
             $results->execute();
             
     }
     
     public function getProduct($id){
      $conn = $this->conn;
      $query = "SELECT * FROM product WHERE Id_product = :id";
      $result = $conn->prepare($query);
      $result->execute([
          ":id"=> $id
      ]);
      $product = $result->fetch(PDO::FETCH_OBJ);
      return $product;
  }
  
  public function countproducts(){
    $conn=$this->conn;
    $query=$conn->query("SELECT COUNT(Id_product) AS countp FROM product");
    $productcount= $query->fetch(PDO::FETCH_OBJ);
    return $productcount;
  }
 
}



?>