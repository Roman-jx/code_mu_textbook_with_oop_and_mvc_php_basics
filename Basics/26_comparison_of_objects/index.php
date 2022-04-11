<?php
require_once "EmployeesCollection.php";
require_once "User.php";
function compare($user, $user2){
    return $user === $user2;
}
echo compare(
    new User("John", 16),
    new User("John", 17),
);
$employee = new EmployeesCollection();
$employee->add(new Employee("John", 19));
$employee->add(new Employee("Lisa", 21));
var_dump($employee->get());
