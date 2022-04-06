<?php
//Init class
class User{
    public $name;
    public $age;
    //crate method for verification year
    public function isAgeCorrect($age){
        return true ? $age >= 18 && $age <= 60 : false;
    }
    //create method for change user year
    public function setAge($age){
        //Check if isAgeCorrect - correct...
        //set new value
        if ($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }
    //create method for adding to year
    public function addAge($years){
        $newAge = $this->age + $years; //calculate new year
        if ($this->isAgeCorrect($newAge)){
            $this->age = $newAge; //set new value
        }
    }
    //create method for subtract from year
    public function subAge($age){
        $this->age -= $age;
    }
}
//Create obj
$usr = new User();
$usr->name = "John";
$usr->age = 25;
$usr->setAge(30);
echo $usr->age."\n";

$usr->addAge(10);
echo $usr->age."\n";

$usr->subAge(20);
echo $usr->age."\n";














?>