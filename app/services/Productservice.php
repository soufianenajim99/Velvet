<?php
class ProductService
{
    private $db;
    private $conn;
    public function __construct()
    {


        $this->db = Database::getInstance();
        $this->conn = $this->db->getConnection();
    }

    public function getAllproduct()
    {
        $conn = $this->conn;
        $query = "SELECT * FROM product";
        $result = $conn->prepare($query);
        $result->execute();
        $product = $result->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }
    public function getCatProd()
    {
        $conn = $this->conn;
        $query = "SELECT product.*, category.*
          FROM product
          JOIN category ON product.Id_category = category.Id_category
          GROUP BY product.Id_product, category.Id_category";



        $result = $conn->prepare($query);
        $result->execute();
        $CatProd = $result->fetchAll(PDO::FETCH_OBJ);
        // shuffle($CatProd);
        return $CatProd;
    }
    public function basket()
    {
        $conn = $this->conn;
        $query = "SELECT product.* 
        FROM product
        JOIN panierofproduct ON panierofproduct.Id_product = product.Id_product
        WHERE Id_Panier = 1";
        $result = $conn->prepare($query);
        $result->execute();
        $product = $result->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }
    public function searchajax($searchQuery)
    {
        $conn = $this->conn;

        $query = "SELECT product.*, category.*
    FROM product
    JOIN category ON product.Id_category = category.Id_category
    WHERE product.Product_name LIKE :searchQuery
    GROUP BY  category.Id_category,product.Id_product";

        $result = $conn->prepare($query);
        $result->execute(['searchQuery' => '%' . $searchQuery . '%']);
        $searchResults = $result->fetchAll(PDO::FETCH_OBJ);
        return $searchResults;
    }

    public function addproduct(product $product)
    {
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

    public function deleteproduct($productId)
    {
        $conn = $this->conn;
        $deleteproduct = "DELETE from product where Id_product = :productId";
        $results = $conn->prepare($deleteproduct);
        $results->bindparam(":productId", $productId, PDO::PARAM_INT);
        $results->execute();
    }

    public function updateproduct(product $updatedproduct, $id)
    {
        $conn = $this->conn;



        $product_name = $updatedproduct->Product_name;
        $product_price = $updatedproduct->Product_price;
        $product_descr = $updatedproduct->Product_descr;
        $product_logo = $updatedproduct->Product_logo;

        $sql = "UPDATE product SET product_name = :product_name, product_price = :product_price, product_descr = :product_descr ,product_logo =:product_logo WHERE Id_product = :id";
        $results = $conn->prepare($sql);

        $results->bindParam(":product_name", $product_name, PDO::PARAM_STR);
        $results->bindparam(":product_price", $product_price, PDO::PARAM_STR);
        $results->bindparam(":product_descr", $product_descr, PDO::PARAM_STR);
        $results->bindparam(":product_logo", $product_logo, PDO::PARAM_STR);
        $results->bindparam(":id", $id, PDO::PARAM_INT);

        $results->execute();
    }

    public function getProduct($id)
    {
        $conn = $this->conn;
        $query = "SELECT * FROM product WHERE Id_product = :id";
        $result = $conn->prepare($query);
        $result->execute([
            ":id" => $id
        ]);
        $product = $result->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    public function addTobasketOfProduct($id){
        $conn = $this->conn;
        $query = "INSERT INTO panierofproduct (Id_Panier,Id_Product) VALUES ( 1 ,:id)";
        $result = $conn->prepare($query);
        $result->bindparam(":id", $id, PDO::PARAM_INT);

        $result->execute();


    }
   

  
  public function countproducts(){
    $conn=$this->conn;
    $query=$conn->query("SELECT COUNT(Id_product) AS countp FROM product");
    $productcount= $query->fetch(PDO::FETCH_OBJ);
    return $productcount;
  }
 
}
