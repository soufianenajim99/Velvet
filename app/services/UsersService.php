<?php


class UsersService
{
    private $db;
    private $conn;

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->conn = $this->db->getConnection();
    }

    public function getusers()
    {
        $dbb = $this->db->dbh;
        $stmt = $dbb->query("SELECT * FROM users");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function addusers(users $users, $FullName, $username, $Adresse, $Email, $password)
    {
        $conn = $this->conn;
        $FullName = $users->FullName;
        $username = $users->username;
        $Adresse = $users->Adresse;
        $Email = $users->Email;
        $password = $users->password;

        $query = "INSERT INTO users  (FullName,username,password,Adresse,Email) VALUE (:FullName,:username,:password,:Adresse,:Email)";
        $result = $conn->prepare($query);
        $result->bindParam(":FullName", $FullName, PDO::PARAM_STR);
        $result->bindParam(":username", $username, PDO::PARAM_STR);
        $result->bindParam(":password", $password, PDO::PARAM_STR);
        $result->bindParam(":Adresse", $Adresse, PDO::PARAM_STR);
        $result->bindParam(":Email", $Email, PDO::PARAM_STR);
        $result->execute();
    }

    public function updateusers(users $users, $FullName, $username, $Adresse, $Email, $id)
    {
        $conn = $this->conn;
        $FullName = $users->$FullName;
        $username = $users->$username;
        $Adresse = $users->$Adresse;
        $Email = $users->$Email;

        $query = "UPDATE users SET FullName=:FullName,username=:username,Adresse=:Adresse,Email=:Email WHERE id = :id";
        $results = $conn->prepare($query);
        $results->bindParam(":FullName", $FullName, PDO::PARAM_STR);
        $results->bindparam(":username", $username, PDO::PARAM_STR);
        $results->bindparam(":Adresse", $Adresse, PDO::PARAM_STR);
        $results->bindparam(":Email", $Email, PDO::PARAM_STR);
        $results->bindparam(":id", $id, PDO::PARAM_INT);
        $results->execute();
    }
    public function deleteusers($id)
    {

        $conn = $this->conn;
        $query = "DELETE FROM users WHERE id = :id";
        $results = $conn->prepare($query);
        $results->bindparam(":id", $id, PDO::PARAM_INT);
        $results->execute();

    }

    public function findUserByEmail($Email){
        $conn=$this->conn;
        $query = "SELECT * FROM users WHERE Email=:Email";
        $results = $conn->prepare($query);
        $results->execute([":Email"=> $Email]);
        $stmt= $results->fetch(PDO::FETCH_OBJ);
        if( $stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }

        }

    public function login( $Email, $password){
        $conn = $this->conn;
        $query = "SELECT * FROM users WHERE Email = :Email";
        $results = $conn->prepare($query);
        $results->execute([":Email"=> $Email]);
        $stmt= $results->fetch(PDO::FETCH_OBJ);
        $hashed_pass= $stmt->password;
        return password_verify($password, $hashed_pass);
    }
}