<?php
require_once "Arr.php";
$arr = new Arr();
$arr->add(100);
$arr->add(33);
echo "The amout of the array: ".$arr->getSum()." and average ".$arr->getAvg()."!";
?>