<?php
// Task 1
class User{
    private $name;
    private $age;
    private $surname;
    private $patronymic;
    public function __construct($name, $surname, $patronymic, $age){
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->age = $age;
    }
    public function __toString(): string{
//        return $this->name;
        return $this->name." ".$this->surname." ".$this->patronymic;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}
$user = new User("John", "...", "...", 12);
echo $user;

// Task 2
class Arr{
    private $numbers = [];
    public function add($num){
        $this->numbers[] = $num;
        return $this;
    }
    public function __toString(){
        return (string)array_sum($this->numbers);
    }
}
$arr = new Arr();
echo $arr->add(1)->add(2)->add(3)->add(4);
