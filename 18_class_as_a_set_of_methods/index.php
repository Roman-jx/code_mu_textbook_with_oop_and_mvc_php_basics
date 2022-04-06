<?php
require_once "ArrayAvgHelper.php";
$arr = new ArrayAvgHelper();
$array = [1,2,3];
echo $arr->getAvg2($array) + $arr->getAvg3($array);
?>