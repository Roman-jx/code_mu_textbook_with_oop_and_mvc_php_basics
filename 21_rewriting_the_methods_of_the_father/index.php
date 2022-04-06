<?php
require_once "User.php";
$student = new Student();

$student->setAge(24);
echo $student->getAge();

$student->setName("John");
echo $student->getName();
?>