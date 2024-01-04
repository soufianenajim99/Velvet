<?php

class Admin extends Controller {
    
    private $CategoryService;
    private $UsersService;
    private $ProductsService;
    private $CommandeService;


    public function __construct(){
        $this->CategoryService = new CategoryService();
        $this->UsersService = new UsersService();
        $this->ProductsService = new ProductService();
        $this->CommandeService = new CommandeService();
    }

    public function index(){
        $users=$this->UsersService->countusers();
        $products=$this->ProductsService->countproducts();
        $commande=$this->CommandeService->countcommandes();
        $data=["users"=>$users ,"products"=>$products,"commandes"=>$commande];
         $this->view("admin/index",$data);

       
    }


    public function products(){
        $this->view("admin/products");
    }

    public function categories(){
    $cats=$this->CategoryService->displayCategory();
    $data=["cats"=>$cats];
    $this->view("admin/categories",$data);
    }

    public function users(){
        $this->view("admin/users");
    }

}