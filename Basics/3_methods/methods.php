<?php
//Init class
class User{
    public $name;
    public $age;

    public function show(){
        return "[!]Check...";
    }
}

//Create obj
// $usr = new User();
// $usr->name = "John";
// $usr->age = 25;

//Print properties
echo $usr->show(); //[!]Check...


//Init class
class User2{
    public $name;
    public $age;

    public function show($str){
        return "[!]Check $str";
    }
}

//Create obj
$usr = new User2();
$usr->name = "John";
$usr->age = 25;

//Print properties
echo $usr->show("hello"); //[!]Check...

?>