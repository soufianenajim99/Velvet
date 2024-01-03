<?php

class Client extends Controller {
    private $Homeser;
    public function __construct(){
        $this->Homeser= $this->service("UsersService");
    }

    public function index($id){
        $data=$this->Homeser->getusers();
        $this->view("Home/index", $data);
    }


    public function product(){
        $this->view("client/product");
    }

    public function Basket(){
        $this->view("client/Basket");
    }
}