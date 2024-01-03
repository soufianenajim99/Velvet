<?php



interface ImCategoryService{
public function addCategory(Category $category);
public function displayCategory();
public function updateCategory(Category $category,$id);
public function deleteCategory($id);


}
?>

