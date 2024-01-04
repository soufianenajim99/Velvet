<?php



interface ImClientService{
public function addClient(Users $user);
public function displayClient();
public function updateClient(Users $user,$id);
public function deleteClient($id);


}
?>