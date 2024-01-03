<?php

class Category extends Controller {
    
    private $CategoryService;
    public function __construct(){
        $this->CategoryService = new CategoryService();
    }

    public function addCategory(){
        $this->CategoryService = new CategoryService();
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            $Name = $_POST["categoryName"];
            $Descr = $_POST["categoryDescription"];
                       $newCategory = new Category();
                       $newCategory->Name_cate = $Name ;
                       $newCategory->Desc_cate = $Descr;
                       try{
                        $this->CategoryService->addCategory($newCategory);
                        header("Location:".URLROOT."admin/categories");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
                    }
        
        $this->view("category/addCategory");
    }


}