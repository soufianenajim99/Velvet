<?php

class Admin extends Users{
    public function __construct($id, $FullName, $username, $Password, $Adresse, $Email){
        parent::__construct($id,$FullName, $username, $Password, $Adresse, $Email);
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