<?php
//Init class
class Employee{
    public $name;
    public $age;
    public $salary;
}

//Create objs
$emp = new Employee();
$emp2 = new Employee();

//First obj
$emp->name = "John";
$emp->age = 25;
$emp->salary = 1000;

//Second obj
$emp2->name = "Eric";
$emp2->age = 26;
$emp2->salary = 2000;

//Print properties
echo $emp->salary + $emp2->salary;
echo $emp->age + $emp2->age;



?>