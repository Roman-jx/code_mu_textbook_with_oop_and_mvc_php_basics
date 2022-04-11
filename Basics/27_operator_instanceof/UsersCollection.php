<?php
require_once "Employee.php";
require_once "Student.php";
class UsersCollection
{
    private $employees = [];
    private $students = [];
    public function add($user){
        if ($user instanceof Employee){
            $this->employees[] = $user;
        }
        if ($user instanceof Student){
            $this->students[] = $user;
        }
    }
    public function getTotalSalary(){
        $sum = 0;
        foreach ($this->employees as $employee){
            $sum += $employee->getSalary();
        }
        return $sum;
    }
    public function getTotalScholarship(){
        $sum = 0;
        foreach ($this->students as $student){
            $sum += $student->getScholarship();
        }
        return $sum;
    }
    public function getTotalPayment(){
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}