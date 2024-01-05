<?php

class Facture {
    private $Id_Facture;
    private $Total_facture;

    public function __construct($Id_Facture,$Total_facture) {
        $this->Id_Facture = $Id_Facture;
        $this->Total_facture = $Total_facture;
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
    public function getFacture($id) {
        global $conn;

        $query = $conn->query("SELECT * FROM product WHERE Id_product = '$id'");
        $Facture = $query->fetch_array();

        return $Facture; 
    }

}


?>