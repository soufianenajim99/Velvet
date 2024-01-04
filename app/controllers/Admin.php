<?php

class Admin extends Controller {
    
    private $CategoryService;

    public function __construct(){
        $this->CategoryService = new CategoryService();
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
        $this->view("admin/users");
    }

}