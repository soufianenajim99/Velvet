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
            $loggedInUser=$this->UsersService->login($email,$password);
            if($loggedInUser){
                if($this->UsersService->isClient($loggedInUser->id)){
                    $this->createSession($this->UsersService->login($email,$password));
                    header("Location:".URLROOT."client/product");
                }else{
                    $this->createSession($this->UsersService->login($email,$password));
                    header("Location:".URLROOT."admin/products");

                }


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
    public function SendEmail()
    {
        $this->view("auth/SendEmail");
    }


    public function createSession($user){
        $_SESSION["Id_user"] = $user->id;
        $_SESSION["username"] = $user->username;
        $_SESSION["email"] = $user->Email;
        // header("Location:".URLROOT."client/product");
    }

    public function destroySession($user){
            unset($_SESSION["Id_user"]);
            unset($_SESSION["username"]);
            unset($_SESSION["email"]);
            session_destroy();
        header("Location:".URLROOT."auth/login");
    }
    
    public function islogged(){
        if(isset($_SESSION["Id_user"])){
            return true;
        }else{
            return false;
        }
    }

}