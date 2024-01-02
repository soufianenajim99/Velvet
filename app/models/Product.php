<?php

class Product {
    private $Id_product;
    private $Product_name;
    private $Product_descr;
    private $Product_price;
    private $Product_logo;
    private $Id_category;

    public function __construct($Id_product, $Name_product, $Description_product, $Price_product, $Id_category,$Product_logo) {
        $this->Id_product = $Id_product;
        $this->Name_product = $Name_product;
        $this->Description_product = $Description_product;
        $this->Price_product = $Price_product;
        $this->Id_category = $Id_category;
        $this->Product_logo = $Product_logo;
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