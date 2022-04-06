<?php
//Init class
class Employee{
    private $name;
    private $surname;
    public $salary;
    //create construct 
    public function __construct($name, $surname, $salary){
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }
}

?>