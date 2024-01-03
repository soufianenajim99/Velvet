<?php
class Users{
    private $id;
    private $FullName;
    private $username;
    private $Password;
    private $Adresse;
    private $Email;

    public function __construct($id, $FullName, $username, $Password, $Adresse, $Email){
        $this->id = $id;
        $this->FullName = $FullName;
        $this->username = $username;
        $this->Password = $Password;
        $this->Adresse = $Adresse;
        $this->Email = $Email;
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
          return $this->$property;
        }
    }
    
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    
    }



}