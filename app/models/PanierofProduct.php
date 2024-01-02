<?php

class PanierofProduct {
    private $Id_panierofproduct ;
    private $Id_Panier ;
    private $Id_Product ;

    public function __construct($Id_Panierofproduct,$Id_Panier, $Id_Product) {
        $this->Id_Panierofproduct = $Id_Panierofproduct;
        $this->Id_Panier = $Id_Panier;
        $this->Id_Product = $Id_Product;
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