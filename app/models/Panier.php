<?php

class Panier {
    private $Id_panier;
    private $Id_client;

    public function __construct($Id_panier, $Id_client) {
        $this->Id_panier = $Id_panier;
        $this->Id_client = $Id_client;
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