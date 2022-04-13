<?php
namespace Car2;
class Controller{
    private $name;
    private $surname;
    public function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
    public function getName(){
        return $this->name;
    }
    public function  getSurname(){
        return $this->surname;
    }
}