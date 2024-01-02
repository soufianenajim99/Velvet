<?php

class Panier {
    private $Id_panier;
    private $Name_panier;

    public function __construct($Id_panier, $Name_panier) {
        $this->Id_panier = $Id_panier;
        $this->Name_panier = $Name_panier;
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

?>