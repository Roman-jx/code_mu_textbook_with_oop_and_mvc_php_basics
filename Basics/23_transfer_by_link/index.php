<?php
// Task 1
class Product {
    public $name;
    public $price;
    public  function  __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}
$product1 = new Product("John", 1002);
$product2 = $product1;
echo $product2->name;
echo $product2->price;
