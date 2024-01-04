<?php

class Admin extends Controller
{

    private $CategoryService;
    private $ProductService;
    private $ClientService;
    private $AdminService;
    private $UsersService;
    


    public function __construct()
    {
        $this->CategoryService = new CategoryService();
    }

    public function index()
    {
        $users=$this->UsersService->countusers();
        $products=$this->ProductsService->countproducts();
        $commande=$this->CommandeService->countcommandes();
        $data=["users"=>$users ,"products"=>$products,"commandes"=>$commande];
         $this->view("admin/index",$data);

       
    }


    // public function products()
    // {
    //     $this->view("admin/products");
    // }

    public function categories()
    {
        $cats = $this->CategoryService->displayCategory();
        $data = ["cats" => $cats];
        $this->view("admin/categories", $data);
    }
    
    public function products()
    {
        $products = $this->ProductService->getAllproduct();
        $data = ["prod" => $products];
        $this->view("admin/products", $data);
    }
    public function product()
    {
        $Catprod = $this->ProductService->getCatProd();
        $data = ["CatProd" => $Catprod];
        $this->view("client/product", $data);
    }

    public function users()
    {
      $ads=$this->AdminService->displayAdmin();
        $clis=$this->ClientService->displayClient();
        $data=["clis"=>$clis,"ads"=>$ads];
        $this->view("admin/users",$data);
    }
}