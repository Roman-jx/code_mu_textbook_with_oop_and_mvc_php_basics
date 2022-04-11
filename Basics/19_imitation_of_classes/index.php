<?php
require_once "User.php";
$employee = new Employee();
$employee->setSalary(1000);
$employee->setName("John");
$employee->setAge(25);

echo $employee->getSalary();
echo $employee->getName();
echo $employee->getAge();

$student = new Student();

$student->getCourse(3);
$student->setName("Kile");
$student->setAge(26);

echo $student->getCourse();
echo $student->getName();
echo $student->getAge();
?>