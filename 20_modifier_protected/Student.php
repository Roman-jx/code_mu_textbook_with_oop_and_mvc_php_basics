<?php
class User{
    private $name;
    protected $age;

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function setAge(int $age){
        $this->age = $age;
    }
}
class Student extends User{
    private $course;
    public function getCourse(){
        return $this->course;
    }
    public function setCourse($course){
        $this->course = $course;
    }
    public function addOneYear(){
        $this->age++;
    }
}
?>