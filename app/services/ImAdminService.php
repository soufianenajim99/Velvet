<?php



interface ImAdminService{
public function addAdmin(Users $user);
public function displayAdmin();
public function updateAdmin(Users $user,$id);
public function deleteAdmin($id);


}
?>