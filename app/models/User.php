<?php
class User{
    private $Id_user;
    private $Username;
    private $Email;
    private $Password;

    public function __construct($Id_user, $Username, $Email, $Password){
        $this->Id_user = $Id_user;
        $this->Username = $Username;
        $this->Email = $Email;
        $this->Password = $Password;
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