<?php
//Init class
class Employee{
    public $name;
    public $age;
    public $salary;
    //create constructor
    public function __construct($name, $age, $salary){ 
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}
//create objs
$emp = new Employee("Eric", 25, 1000);
$emp2 = new Employee("Kyle", 30, 2000);
//print
echo $emp->salary + $emp2->salary;

?>