<?php
// Task 1
require_once "User.php";
require_once "Geom.php";
$emp = new Employee();
$stud = new Student();
$emp->increaseMoney(402);
$stud->increaseMoney(952);
echo $emp->getSalary();
echo $stud->getSch();

// Task 2
$rec = new Rectangle(2, 5);
echo $rec->getSquare();
echo $rec->getPerimeter();
echo $rec->getSquarePerimeterSum();