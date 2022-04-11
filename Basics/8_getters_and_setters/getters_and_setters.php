<?php
//Init class
class Employee{
    private $name;
    private $age;
    private $salary;
    
    public function getName(){
        return $this->name;
    }  
    public function getAge(){
        return $this->age;
    }
    public function getSalary(){
        return $this->salary."$";
    }
    public function setName (string $name){
        if ($name == "John"){
            $this->name = "New John";
        }
    }
    public function setAge(int $age){
        if ($this->isAgeCorrect($age)){
            $this->age++;
        }
    }
    public function setSalary(int $salary){
        if ($salary >= 10000){
            $this->salary = $salary;
        }
    }
    private function isAgeCorrect(int $age){
        if ($age >= 1 && $age < 100){
            return true;
        }
        return false;
    }
}



























?>