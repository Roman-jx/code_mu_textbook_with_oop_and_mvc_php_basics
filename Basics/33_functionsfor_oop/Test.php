<?php
class Test{
    public $prop1;
    public $prop2;
    private $prop3;
    private $prop4;
    public function __construct(){
        var_dump(get_class_vars("Test"));
    }
    public function method1(){
        return "Hello";
    }
    public function method2(){
        return "Test";
    }
    public function method3(){
        return "Test 2";
    }
}