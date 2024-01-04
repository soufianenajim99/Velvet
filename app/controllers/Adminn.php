<?php

class Adminn extends Controller {
    private $AdminService;

    public function __construct(){
        $this->AdminService = new AdminService();       
    }

    public function index($id){
        $data=$this->Homeser->getusers();
        $this->view("Home/index", $data);
    }

    public function addAdmin(){
        $this->AdminService = new AdminService();    
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            echo "post";
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $Adresse = $_POST["Adresse"];
            $Email = $_POST["Email"];
            $newAdmin = new Admin();
            $newAdmin->FullName = $fullname ;
            $newAdmin->username = $username ;
            $newAdmin->Password = $password ;
            $newAdmin->Adresse = $Adresse ;
            $newAdmin->Email = $Email ;
                       try{
                        $this->AdminService->addAdmin($newAdmin);
                        header("Location:".URLROOT."admin/users");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
                    }
        
        $this->view("admin/Adminn/addAdmin");
    }

    public function deleteAdmin($id){
        $this->AdminService->deleteAdmin($id);
        header("Location:".URLROOT."admin/users");


    }


    public function updateAdmin($id){

        $this->AdminService = new AdminService(); 
        $clis=$this->AdminService->getAdmin($id); 
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $Adresse = $_POST["Adresse"];
            $Email = $_POST["Email"];
            $newAdmin = new Admin();
            $newAdmin->FullName = $fullname ;
            $newAdmin->username = $username ;
            $newAdmin->Password = $password ;
            $newAdmin->Adresse = $Adresse ;
            $newAdmin->Email = $Email ;

                       try{
                        $this->AdminService->updateAdmin($newAdmin,$id);
                        header("Location:".URLROOT."admin/users");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
                    }
        $data=[
            "clis"=> $clis
        ];
        $this->view("admin/Adminn/updateAdmin",$data);

    }



}