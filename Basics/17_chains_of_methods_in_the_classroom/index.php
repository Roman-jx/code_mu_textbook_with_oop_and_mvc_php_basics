<?php
require_once "Arr.php";
echo (new Arr1())->add(1)->add(2)->add(3)->push([4, 5])->getSum();
?>