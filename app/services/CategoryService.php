<?php



class CategoryService implements ImCategoryService{

  private $db;
  private $conn;
  public function __construct(){


$this->db = Database::getInstance();
$this->conn = $this->db->getConnection();


}
public function displayCategory(){
    $conn = $this->conn;
    $query = "SELECT * FROM category";
    $result = $conn->prepare($query);
    $result->execute();
    $category = $result->fetchAll(PDO::FETCH_OBJ);
    return $category;
    
}


public function addCategory(Category $category){
    $conn = $this->conn;
    $Name_cate =$category->Name_cate;
    $Desc_cate =$category->Desc_cate;
    $query = "INSERT INTO category  (Name_cate,Desc_cate) VALUE (:Name_cate,:Desc_cate)";
    $result = $conn->prepare($query);
    $result->bindParam(":Name_cate" , $Name_cate, PDO::PARAM_STR);
    $result->bindParam(":Desc_cate" , $Desc_cate, PDO::PARAM_STR);
    $result->execute();
}

public function updateCategory(Category $category,$id){
    $conn = $this->conn;
    $Name_cate =$category->Name_cate;
    $Desc_cate =$category->Desc_cate;
    $query="UPDATE category SET Name_cate=:Name_cate , Desc_cate=:Desc_cate WHERE Id_category = :id";
    $results = $conn->prepare($query);
    $results->bindParam(":Name_cate",$Name_cate,PDO::PARAM_STR);
    $results->bindparam(":Desc_cate",$Desc_cate,PDO::PARAM_STR);
    $results->bindparam(":id",$id,PDO::PARAM_INT);
    $results->execute();
}
public function deleteCategory($id){

    $conn = $this->conn;
    $query = "DELETE FROM category WHERE Id_category = :id";
    $results =$conn->prepare($query);
    $results->bindparam(":id",$id,PDO::PARAM_INT);
    $results->execute();

}

public function getCategory($id){
    $conn = $this->conn;
    $query = "SELECT * FROM category WHERE Id_category = :id";
    $result = $conn->prepare($query);
    $result->execute([
        ":id"=> $id
    ]);
    $category = $result->fetch(PDO::FETCH_OBJ);
    return $category;
}

 


}

?>