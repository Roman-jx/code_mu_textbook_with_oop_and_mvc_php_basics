<?php
class User{
    private $name;
    private $age;
    public function __construct(string $name, int $age){
        $this->age = $age;
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}
?>