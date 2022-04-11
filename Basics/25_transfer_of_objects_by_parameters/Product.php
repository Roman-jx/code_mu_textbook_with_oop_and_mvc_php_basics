<?php
require_once "Cart.php";
class Product{
    private $name;
    private $price;
    private $quantity;
    public function __construct($name, $price, $quantity){
        $this->quantity = $quantity;
        $this->price = $price;
        $this->name = $name;
    }
    public function getCost(){
        return $this->price * $this->quantity;
    }
}