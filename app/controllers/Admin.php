<?php

class Admin extends Controller {
    
    private $CategoryService;
    private $ClientService;

    public function __construct(){
        $this->CategoryService = new CategoryService();
        $this->ClientService = new ClientService();
    }

    public function index(){
        $this->view("admin/index");
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
        $clis=$this->ClientService->displayClient();
        $data=["clis"=>$clis];
        $this->view("admin/users",$data);
    }

}