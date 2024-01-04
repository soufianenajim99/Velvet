<?php

class Admin extends Controller
{

    private $CategoryService;
    private $ProductService;
    private $ClientService;
    private $AdminService;

    public function __construct()
    {
        $this->CategoryService = new CategoryService();
        $this->ClientService = new ClientService();
        $this->ProductService = new ProductService();
        $this->AdminService = new AdminService();
    }

    public function index()
    {
        $this->view("admin/index");
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


    public function users()
    {
      $ads=$this->AdminService->displayAdmin();
        $clis=$this->ClientService->displayClient();
        $data=["clis"=>$clis,"ads"=>$ads];
        $this->view("admin/users",$data);
    }
}