<?php
require_once "Student.php";
$student = new Student();

$student->setName("John");
$student->setCourse(3);
$student->setAge(25);

$student->addOneYear();
echo $student->getAge();
?>