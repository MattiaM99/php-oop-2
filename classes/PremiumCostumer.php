<?php

require_once __DIR__ . "/Costumer.php";

class PremiumCostumer extends Costumer {

  function __construct($_email, $_password, $_nick)
  {
    parent::__construct($_email, $_password, $_nick);
    
    $this->discount = 10;
  }

  public function setDiscount($_discount){
    $this->discount = $_discount + 10;
  }
}