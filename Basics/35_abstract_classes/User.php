<?php
abstract  class User{
    private $name;
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    abstract public function increaseMoney($money);
    abstract public function decreaseMoney($money);
}
class Employee extends User{
    private $salary;
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function increaseMoney($money){
        $this->salary += $money;
    }
    public function decreaseMoney($money){
        $this->salary -= $money;
    }
}
class Student extends User{
    private $sch;
    public function getSch(){
        return $this->sch;
    }
    public function setSch($sch){
        $this->sch = $sch;
    }
    public function increaseMoney($money){
        $this->sch += $money;
    }
    public function decreaseMoney($money){
        $this->sch -= $money;
    }
}