<?php
class User{
    private $name;
    private $age;

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setName(string $name){
        if (strlen($name) > 3){
            $this->name = $name;
        }
    }
    public function setAge(int $age){
        if ($age >= 18){
            $this->age = $age;
        }
    }
}
class Student extends User{
    private $course;
    public function setAge($age){
        if ($age <= 25){
            parent::setAge($age);
        }
    }
    public function getCourse(){
        return $this->course;
    }
    public function setCourse(int $course){
        $this->course = $course;
    }
    public function setName(string $name){
        if (strlen($name) < 10){
            parent::setName($name);
        }
    }
}
?>