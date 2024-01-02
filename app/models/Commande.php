<?php

class Commande {

private $Id_commande;

public function __construct($id_commande) {
    $this->Id_commande = $id_commande;
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