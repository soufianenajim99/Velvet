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

    public function deleteCategory($id){
        $this->CategoryService = new CategoryService();
        try{
            $this->CategoryService->deleteCategory($id);
            header("Location:".URLROOT."admin/categories");

        }catch(PDOException $e){
            die($e->getMessage());
           }
    }


    public function updateCategory($id){
        $this->CategoryService = new CategoryService();
        $catsu= $this->CategoryService->getCategory($id);
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            $Name = $_POST["categoryName"];
            $Descr = $_POST["categoryDescription"];
                       $newCategory = new Category();
                       $newCategory->Name_cate = $Name ;
                       $newCategory->Desc_cate = $Descr;
                       try{
                        $this->CategoryService->updateCategory( $newCategory , $id );
                        header("Location:".URLROOT."admin/categories");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
                    }
        $data=[
            "cats"=> $catsu
        ];
        $this->view("category/updateCategory", $data);
    }

}