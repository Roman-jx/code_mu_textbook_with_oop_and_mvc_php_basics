<?php
//class User{
//    private $name;
//    private $age;
//    public function getName(){
//        return $this->name;
//    }
//    public function setName($name){
//        $this->name = $name;
//    }
//    public function getAge(){
//        return $this->age;
//    }
//    public function setAge($age){
//        if ($age >= 0 and $age <= 70){
//            $this->age = $age;
//        }
//    }
//}

// Task 1
class User{
    private $name;
    private $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __get($value){
        if ($value != ""){
            return $this->$value;
        }
    }
    public function __set($key, $value){
        if ($value >= 0 and $value <= 70){
            $this->$key = $value;
        }
    }
}
$user = new User("John", 42);
$user->name = "Luid";
$user->age = 52;
echo $user->name;
echo $user->age;