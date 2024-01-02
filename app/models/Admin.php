<?php

class Admin{
    private $Id_admin;
    private $Id_user;

    public function __construct($Id_admin, $Id_user){
        $this->Id_admin = $Id_admin;
        $this->Id_user = $Id_user;
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