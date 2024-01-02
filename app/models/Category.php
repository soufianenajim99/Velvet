<?php

class Category {

private $Id_category;
private $Name_cate;
private $Desc_cate;

public function __construct($Id_category, $Name_cate, $Desc_cate){
    $this->Id_category = $Id_category;
    $this->Name_cate = $Name_cate;
    $this->Desc_cate = $Desc_cate;
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