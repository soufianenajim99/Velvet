<?php

class Auth extends Controller {
    
    public function __construct(){
    }

    public function login(){
        $this->view("auth/login");
    }


    public function signup(){

        $this->view("auth/signup");
    }

}