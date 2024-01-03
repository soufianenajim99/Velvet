<?php

class Category extends Controller {
    
    public function __construct(){
    }

    public function addCategory(){
        $this->view("category/addCategory");
    }


}