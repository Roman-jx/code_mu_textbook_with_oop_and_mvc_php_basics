<?php
class Post{
    private $name;
    private $salary;
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

}
class Employee {
    private $name2;
    private $surname;
    public function  __construct($name2, $surname, $name, $salary){
        $this->name = $name2;
        $this->surname = $surname;
    }
    public function getName(){
        return $this->name2;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setName($name){
        $this->name2 = $name;
    }
    public function setSurname($surname){
        $this->surname = $surname;
    }
}
$programmer = new Post();
$manager = new Post();
$driver = new Post();