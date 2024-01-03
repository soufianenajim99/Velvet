<?php

class Admin extends Controller {
    
    public function __construct(){
    }

    public function index(){
        $this->view("admin/index");
    }


    public function products(){
        $this->view("admin/products");
    }

    public function categories(){
        $this->view("admin/categories");
    }

    public function users(){
        $this->view("admin/users");
    }

}