<?php



class AdminService implements ImAdminService{

  private $db;
  private $conn;
  public function __construct(){


$this->db = Database::getInstance();
$this->conn = $this->db->getConnection();


}
public function displayAdmin(){
    $conn = $this->conn;
    $query = "SELECT * FROM users JOIN admin ON admin.ID_admin=users.id";
    $result = $conn->prepare($query);
    $result->execute();
    $Admin = $result->fetchAll(PDO::FETCH_OBJ);
    return $Admin;
    
}


public function addAdmin(Users $user){
    $conn = $this->conn;
    $FullName =$user->FullName;
    $username =$user->username;
    $Password =$user->Password;
    $Adresse =$user->Adresse;
    $Email =$user->Email;
    $query = "START TRANSACTION;
     
    INSERT INTO users (FullName, username, Password,Adresse,Email)
     VALUES (:FullName,:username,:Password,:Adresse,:Email);

     SET @userId = LAST_INSERT_ID();

    INSERT INTO admin (ID_admin)
    VALUES (@userId);

    COMMIT;";
    $result = $conn->prepare($query);
    $result->execute([
        ":FullName"=> $FullName,
        ":username"=> $username,
        ":Password"=> $Password,
        ":Adresse"=> $Adresse,
        ":Email"=> $Email,
    ]);
}

public function updateAdmin(Users $user,$id){
    $conn = $this->conn;
    $FullName =$user->FullName;
    $username =$user->username;
    $Password =$user->Password;
    $Adresse =$user->Adresse;
    $Email =$user->Email;
    
    $query="UPDATE users SET FullName=:FullName , username=:username , Password=:Password , Adresse=:Adresse , Email=:Email WHERE id = :id";
    $results = $conn->prepare($query);
    $results->execute([
        ":FullName"=> $FullName,
        ":username"=> $username,
        ":Password"=> $Password,
        ":Adresse"=> $Adresse,
        ":Email"=> $Email,
        ":id"=>$id,
    ]);
}
public function deleteAdmin($id){

    $conn = $this->conn;
    $query = "DELETE FROM users WHERE id = :id";
    $results =$conn->prepare($query);
    $results->execute([
        ":id"=>$id
    ]);

}

public function getAdmin($id){
    $conn = $this->conn;
    $query = "SELECT * FROM users WHERE id = :id";
    $result = $conn->prepare($query);
    $result->execute([
        ":id"=> $id
    ]);
    $Admin = $result->fetch(PDO::FETCH_OBJ);
    return $Admin;
}



}

?>