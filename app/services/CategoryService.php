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
    
}





}

?>