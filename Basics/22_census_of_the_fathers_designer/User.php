<?php
class User{
    private $name;
    private $surname;
    private $birthday;
    public function __construct($name, $surname, $birthday){
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
    }
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getBirthday(){
        return $this->birthday;
    }
    public function calculateAge($date){
        $this->birthday = $date;
        return $this->birthday;
    }
}
class Employee extends User{
    private $salary;
    public function __construct($name, $surname, $birthday, $salary){
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}   
?>