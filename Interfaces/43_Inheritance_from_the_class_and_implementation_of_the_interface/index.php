<?php
// Task 1
interface iProgrammer{
    public function __construct($name, $salary);
    public function getName();
    public function getSalary();
    public function getLangs();
    public function addLang($lang);
}
class Employee{
    private $name;
    private $salary;
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName(){
        return $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }
}
class Programmer extends Employee implements iProgrammer{
    public function addLang($lang)
    {
        // TODO: Implement addLang() method.
    }
    public function getLangs()
    {
        // TODO: Implement getLangs() method.
    }
}
$prog = new Programmer("John", 10232);