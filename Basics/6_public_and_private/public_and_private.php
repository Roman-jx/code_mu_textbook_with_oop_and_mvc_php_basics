<?php
//Init class
class User{
    public $name;
    public $age;

    //create method for change user age
    public function setAge($age){
        if ($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    } 
    //create method for adding user age
    public function addAge($age){
        $newAge = $this->age + $age; //calculate new age
        if ($this->isAgeCorrect($newAge)){
            $this->age = $newAge; //set new value
        }
    }
    //create private method
    private function isAgeCorrect($age){
        return $age >= 18 && $age <= 60;
    }
}
$usr = new User();
$usr->name = "John";
$usr->age = 25;
echo $usr->isAgeCorrect(30); //will not work

//Init class
class Student{
    public $name;
    public $course; //from 1 to 5
    //create method
    public function transferToNextCourse(int $course){
        if ($this->isCourseCorrect($course)){
            $this->course += 1;
        }
        $this->course += 0;
    }
    //create private method
    private function isCourseCorrect(int $course){
        if ($course < 5 && $course > 0){
            return true;
        }
        return false;
    }
}
//Create obj
$stud = new Student();
$stud->name = "John";
$stud->course = 2;
echo $stud->transferToNextCourse(3);

?>