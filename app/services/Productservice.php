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

    
    public function addproduct(product $product){
        $conn = $this->conn;
        $addproductQuery = "INSERT INTO `product`(`Id_product`,`Product_name`,`product_descr`,`Product_price`,`product_logo`,`Id_category`) VALUES (:Id_product,:Product_name,:product_descr,:Product_price,:product_logo,:Id_category)" ;
        $result = $conn->prepare($addproductQuery);
        $result->bindParam(":Id_product",$product->Id_product);
        $result->bindParam(":Product_name",$product->Name_product);
        $result->bindParam(":Product_price",$product->Price_product);
        $result->bindParam(":Product_descr",$product->Description_product);
        $result->bindParam(":product_logo",$product->product_logo);
        $result->bindParam(":Id_category",$product->Id_category);
  
     $result->execute();
     }

     public function deleteproduct($productId){
        $conn = $this->conn;
        $deleteproduct = "DELETE from product where id = :productId";
        $results =$conn->prepare($deleteproduct);
        $results->bindparam(":productId",$productId,PDO::PARAM_INT);
        $results->execute();
     }
     
     public function updateproduct(product $updatedproduct) {
        $conn = $this->conn;
        
             $product_name = $updatedproduct->product_name;
             $product_price = $updatedproduct->product_price;
             $product_descr = $updatedproduct->product_descr;
             $id = $updatedproduct->Id;
     
             $sql = "UPDATE product SET product_name = :product_name, product_price = :product_price, product_descr = :product_descr ,product_logo =:product_logo ,Id_category=:Id_category WHERE id = :id";
             $results = $conn->prepare($sql);

             $results->bindParam(":product_name", $product_name,PDO::PARAM_INT);
             $results->bindparam(":product_price", $product_price,PDO::PARAM_INT);
             $results->bindparam(":product_descr", $product_descr,PDO::PARAM_INT);
             $results->bindparam(":id",$id,PDO::PARAM_INT); 
             
             $results->execute();
             
     }
     
     
 
}



?>