<?php

class Product {

  private $name_product;
  private $description_product;
  private $cost_product;
  private $quantity_product;

  public function __construct($_name_product,$_cost_product,$_quantity_product)
  {
    $this->name_product = $_name_product;
    $this->cost_product = $_cost_product;
    $this->quantity_product = $_quantity_product;
  }

  public function setNameProduct($_name_product){
    $this->name_product = $_name_product;
  }
  
  public function getNameProduct(){
    return $this->name_product;
  }

  public function setDescriptionProduct($_description_product){
    $this->_description_product = $_description_product;
  }

  public function getDescriptionProduct(){
    return $this->name_product;
  }

  public function setCostProduct($_cost_product){
    $this->cost_product = $_cost_product;
  }
  
  public function getCostProduct(){
    return $this->cost_product;
  }

  public function setQuantityProduct($_quantity_product){
    $this->quantity_product = $_quantity_product;
  }

  public function getQuantityProduct(){
    return $this->quantity_product;
  }

  public function getFinalCost(){
    $finalPrice = $this->cost - (($this->cost * $this->discount) / 100);
    return number_format($finalPrice, 2, ",", "");
  }
}

