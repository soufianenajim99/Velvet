<?php
class ProductService {
    private $db;
    private $conn;
    public function __construct(){
  
  
  $this->db = Database::getInstance();
  $this->conn = $this->db->getConnection();
  
  
  }

    public function getAllproduct(){
        $dbb=$this->db->dbh;
        $stmt=$dbb->query("SELECT * FROM product"); 
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    
    public function addproduct(product $product){
        
        $addproductQuery = "INSERT INTO `product`(`Id_product`,`product_descr`,`Product_name`,`Product_price`,`product_logo`,`Id_category`) VALUES (:Id_product,:product_descr,:Product_name,:Product_price,:product_logo,:Id_category)" ;
        $this->db->prepare($addproductQuery);
        $this->db->bind(":Id_product",$product->Id_product);
        $this->db->bind(":Product_name",$product->Name_product);
        $this->db->bind(":Product_price",$product->Description_product);
        $this->db->bind(":Product_price",$product->Description_product);
        $this->db->bind(":product_logo",$product->Price_product);
        $this->db->bind(":Id_category",$product->Id_category);
  
     
        try{
         $this->db->execute();
         echo "added";
        }
        catch(PDOException $e){
          die($e->getMessage());
        }
 
     }


}



?>