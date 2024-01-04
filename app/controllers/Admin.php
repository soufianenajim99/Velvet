<?php

class Admin extends Controller
{

    private $CategoryService;
    private $ProductService;

    public function __construct()
    {
        $this->CategoryService = new CategoryService();
        $this->ProductService = new ProductService();
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
        $this->view("admin/users");
    }
}
