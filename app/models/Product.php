<?php

class Product {
    private $Id_product;
    private $Name_product;
    private $Description_product;
    private $Price_product;
    private $Id_category;

    public function __construct($Id_product, $Name_product, $Description_product, $Price_product, $Id_category) {
        $this->Id_product = $Id_product;
        $this->Name_product = $Name_product;
        $this->Description_product = $Description_product;
        $this->Price_product = $Price_product;
        $this->Id_category = $Id_category;
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