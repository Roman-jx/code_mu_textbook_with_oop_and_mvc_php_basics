<?php
// Task 1
require_once "core/con1.php";
require_once "project/con2.php";

$car1 = new \Car\Controller("John", "...");
$car2 = new \Car2\Controller("Jill", "...");
echo $car1->getName();
echo $car1->getSurname();

echo $car2->getName();
echo $car2->getSurname();

// Task 2
