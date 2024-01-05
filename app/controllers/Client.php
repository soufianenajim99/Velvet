<?php

class Client extends Controller {
    private $Homeser;
    private $ProductService;
    

    public function __construct(){
        $this->Homeser= $this->service("UsersService");
        $this->ProductService = new ProductService();

    }

    public function index($id){
        $data=$this->Homeser->getusers();
        $this->view("Home/index", $data);
    }


    public function product(){
        $Catprod = $this->ProductService->getCatProd();
        $data = ["CatProd" => $Catprod];
        $this->view("client/product", $data);
    }

    public function Basket($id = 0){

       $products = $this->ProductService->basket();
        $this->ProductService->addTobasketOfProduct($id);

       $data = ["product" => $products];
        $this->view("client/Basket",$data);
    }
}