<?php
require_once "Product.php";
$cart = new Cart();
$cart->add(new Product("apple", 200, 5));
echo $cart->getAvgPrice();