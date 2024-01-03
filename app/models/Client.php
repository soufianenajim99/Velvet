<?php

class Client{
    private $Id_client;
    private $Id_user;

    public function __construct($Id_client, $Id_user){
        $this->Id_client = $Id_client;
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