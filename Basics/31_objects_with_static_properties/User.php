<?php
class User{
    public static $counter = 0;
    public $name;
    public $surname;
    public function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
}
class NewUser{
    private static $counter = 0;
    public $name;
    public $surname;
    public function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
    public static function getCount(){
        return self::$counter;
    }
}