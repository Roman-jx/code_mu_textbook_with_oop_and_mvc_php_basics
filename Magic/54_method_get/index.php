<?php
// Task 1
class User{
    private $name;
    private $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __get(string $something){
        return $this->$something;
    }
}
$user = new User("John", 24);
echo $user->name;
echo $user->age;
// Task 2
class Date{
    public $year;
    public $month;
    public $day;
    public function __construct($year, $month, $day){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function __get($propt){
        if ($propt == "weekDay"){
            return $this->year."/".$this->month."/".$this->day;
        }
    }
}
$date = new Date("2002", "12", "3");
echo $date->weekDay;

