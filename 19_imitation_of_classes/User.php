<?php
class User{
    private $name;
    private $age;
    public function getName(string $name){
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
class Employee extends User{
    private $salary;
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary(int $salary){
        $this->salary = $salary;
    }
}
class Student extends User{
    private $course;
    public function getCourse(){
        return $this->course;
    }
    public function setCourse(int $course){
        $this->course = $course;
    }

}
class Programmer extends Employee{
    private $langs = [];
    public function getLang(){
        return $this->langs;
    }
    public function setLang($lang){
        $this->langs[] = $lang;
    }
}
class Driver extends Employee{
    private $experience;
    private $category;
    
    public function getExperience(){
        return $this->experience;
    }
    public function getCategory(){
        return $this->category;
    }
    public function setExperience(int $exp){
        $this->experience = $exp;
    }
    public function setCategory(string $categ){
        $this->category = $categ;
    }
}
?>