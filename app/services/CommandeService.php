<?php
class CommandeService {
    private $db;
    private $conn;
    public function __construct(){
  
  
  $this->db = Database::getInstance();
  $this->conn = $this->db->getConnection();
  
  
  }

    public function getAllcommande(){
        $conn = $this->conn;
        $query="SELECT * FROM commande"; 
        $result=$conn->prepare($query);
        $result->execute();
        $commandes=$result->fetchAll(PDO::FETCH_OBJ);
        return $commandes;
    }


    public function addcommande(commande $commande){
        $conn = $this->conn;
        $addcommandeQuery = "INSERT INTO `commande`(`Id_commandeline`,`Id_product`,`Id_commande`,`Qte_commande`) VALUES (:Id_commandeline,:Id_product,:Id_commande,:Qte_commande)" ;
        $result = $conn->prepare($addcommandeQuery);
        $result->bindParam(":Id_commandeline",$commande->Id_commandeline);
        $result->bindParam(":Id_product",$commande->Id_product);
        $result->bindParam(":Id_commande",$commande->Id_commande);
        $result->bindParam(":Qte_commande",$commande->Qte_commande);
     $result->execute();
     }

     public function countcommandes()
     {
         $conn=$this->conn;
         $query=$conn->query("SELECT COUNT(Id_commande) AS counto FROM commande");
         $commandecount= $query->fetch(PDO::FETCH_OBJ);
         return $commandecount;
     }
 
}



?>