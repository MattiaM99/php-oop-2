<?php

class Costumer{
  private $name;
  private $surname;
  private $nick;
  private $email;
  private $password;
  protected $discount = 0;

  function __construct($_email, $_password, $_nick)
  {
    $this->email = $_email;
    $this->password = $_password;
    $this->nick = $_nick;
  }

  public function setName($_name){
    $this->name = $_name;
  }

  public function getName(){
    return $this->name;
  }

  public function setSurname($_surname){
    $this->surname = $_surname;
  }

  public function getSurname(){
    return $this->surname;
  }

  public function setNick(){
    return $this->nick;
  }

  public function getNick(){
    return $this->nick;
  }

  public function setEmail($_email){
    if (filter_var($_email, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL)) {
      $this->email = $_email;
    }
  }

  public function getEmail(){
    return $this->email;
  }

  public function setPassword($_password){
    if (strlen($_password) > 5){
      $this->password = $_password;
    }
  }

  public function getPassword(){
    return $this->password;
  }

  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  public function getDiscount(){
    return $this->discount;
  }
};