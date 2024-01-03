<?php

class Commandline {
    private $Id_commandeline;
    private $Id_product;
    private $Id_commande;
    private $Id_facture;
    private $Qte_commande;

    public function __construct($Id_commandeline, $Id_product, $Id_commande, $Id_facture, $Qte_commande) {
        
        $this->Id_commandeline = $Id_commandeline;
        $this->Id_product = $Id_product;
        $this->Id_commande = $Id_commande;
        $this->Id_facture = $Id_facture;
        $this->Qte_commande = $Qte_commande;
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