<?php
require_once "Product.php";
class Cart{
    private $products = [];
    public function add($product){
        $this->products[] = $product;
    }
    public function remove($product){
        array_splice($this->products, array_search($product, $this->products),1);
    }
    public function getTotalCost(){
        $sum =0;
        foreach ($this->products as $pr){
            $sum += $pr->gerCost();
        }
        return $sum;
    }
    public  function getTotalQuantity(){
        return count($this->products);
    }
    public function getAvgPrice(){
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}