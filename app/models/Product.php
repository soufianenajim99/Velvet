<?php

class Product {
    private $Id_product;
    private $Product_name;
    private $Product_descr;
    private $Product_price;
    private $Product_logo;
    private $Id_category;

    public function __construct($Id_product, $Product_name, $Product_descr, $Product_price, $Id_category,$Product_logo) {
        $this->Id_product = $Id_product;
        $this->Product_name = $Product_name;
        $this->Product_descr = $Product_descr;
        $this->Product_price = $Product_price;
        $this->Product_logo = $Product_logo;
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