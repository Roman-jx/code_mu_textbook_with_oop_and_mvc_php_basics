<?php
// Task 1
require_once "User.php";
$user = new User();
$user->setName("John");
$user->setAge(12);
echo $user->getAge();
echo $user->getName();