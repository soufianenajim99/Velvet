<?php

class Home extends Controller {
    public function __construct(){
        $this->Homeser= $this->service("UsersService");
    }

    public function index($id){
        $this->view("Home/index");
    }
}