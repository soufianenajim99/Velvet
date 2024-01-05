<?php

class Auth extends Controller {
    
    private $ClientService;
    private $UsersService;
    public function __construct(){
        $this->ClientService = new ClientService();     
        $this->UsersService = new UsersService();  

    }

    public function login(){
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            $email=$_POST["email"];
            $password=$_POST["password"];
            if($this->UsersService->login($email,$password)){
               $this->createSession($this->UsersService->login($email,$password));

            $this->view("auth/login");

         
        }else{
          echo "error";
            $this->view("auth/login");
        }

    }
    $this->view("auth/login");

}

    
    public function signup(){
        $this->ClientService = new ClientService();    
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
                        $this->ClientService->addClient($newClient);
                        header("Location:".URLROOT."auth/login");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
            }
        $this->view("auth/signup");
    }


    public function createSession($user){
        $_SESSION["Id_client"] = $user->id;
        $_SESSION["username"] = $user->username;
        $_SESSION["email"] = $user->Email;
        header("Location:".URLROOT."client/product");
    }


}