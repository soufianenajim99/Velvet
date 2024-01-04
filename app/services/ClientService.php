<?php



class ClientService implements ImClientService{

  private $db;
  private $conn;
  public function __construct(){


$this->db = Database::getInstance();
$this->conn = $this->db->getConnection();


}
public function displayClient(){
    $conn = $this->conn;
    $query = "SELECT * FROM users JOIN client ON client.Id_client=users.id";
    $result = $conn->prepare($query);
    $result->execute();
    $Client = $result->fetchAll(PDO::FETCH_OBJ);
    return $Client;
    
}


public function addClient(Users $user){
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

    INSERT INTO client (ID_client)
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

public function updateClient(Users $user,$id){
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
public function deleteClient($id){

    $conn = $this->conn;
    $query = "DELETE FROM users WHERE id = :id";
    $results =$conn->prepare($query);
    $results->execute([
        ":id"=>$id
    ]);

}

public function getClient($id){
    $conn = $this->conn;
    $query = "SELECT * FROM users WHERE id = :id";
    $result = $conn->prepare($query);
    $result->execute([
        ":id"=> $id
    ]);
    $Client = $result->fetch(PDO::FETCH_OBJ);
    return $Client;
}



}

?>