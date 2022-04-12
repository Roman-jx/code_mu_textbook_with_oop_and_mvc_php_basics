<?php
// Task 1
require_once "Cube.php";
$cube = new Cube(4);
echo $cube->getVolume();
echo $cube->getAreaOfVolume();

// Task 2
$user = new User("John", 12);
echo $user->getName();
echo $user->getAge();