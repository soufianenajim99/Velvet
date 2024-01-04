<?php

class Clientt extends Controller {
    private $ClientService;

    public function __construct(){
        $this->ClientService = new ClientService();       
    }

    public function index($id){
        $data=$this->Homeser->getusers();
        $this->view("Home/index", $data);
    }

    public function addClient(){
        $this->ClientService = new ClientService();    
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            echo "post";
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $Adresse = $_POST["Adresse"];
            $Email = $_POST["Email"];
            $newClient = new Client();
            $newClient->FullName = $fullname ;
            $newClient->username = $username ;
            $newClient->Password = $password ;
            $newClient->Adresse = $Adresse ;
            $newClient->Email = $Email ;
                       try{
                        $this->ClientService->addClient($newClient);
                        header("Location:".URLROOT."admin/users");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
                    }
        
        $this->view("admin/clientt/addClient");
    }

    public function deleteClient($id){
        $this->ClientService->deleteClient($id);
        header("Location:".URLROOT."admin/users");


    }


    public function updateClient($id){

        $this->ClientService = new ClientService(); 
        $clis=$this->ClientService->getClient($id); 
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $Adresse = $_POST["Adresse"];
            $Email = $_POST["Email"];
            $newClient = new Client();
            $newClient->FullName = $fullname ;
            $newClient->username = $username ;
            $newClient->Password = $password ;
            $newClient->Adresse = $Adresse ;
            $newClient->Email = $Email ;

                       try{
                        $this->ClientService->updateClient($newClient,$id);
                        header("Location:".URLROOT."admin/users");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
                    }
        $data=[
            "clis"=> $clis
        ];
        $this->view("admin/clientt/updateClient",$data);

    }



}