<?php
require_once "Test.php";
require_once "Test1.php";
require_once "Test2.php";
// Task 1
$test = new Test();
echo get_class($test);

// Task 2
$t1 = new Test1();
$t2 = new Test2();
$arr = [
    $t1, $t2,
];
foreach ($arr as $a){
    echo get_class($a);
}

// Task 3
var_dump(get_class_methods(new Test()));

// Task 4
$test = new Test();
$gcm = get_class_methods($test);
foreach ($gcm as $t){
    echo $test->$t();
}

// Task 5
var_dump(get_class_vars("Test"));

// Task 6
$obj = new Test();

// Task 7
var_dump(get_object_vars(new Test()));

// Task 8
if (class_exists("Test")){
    $obj = new Test();
}

// Task 9
echo method_exists("Test", "method1");

// Task 10
echo property_exists("Test", "prop1");

// Task 11
echo get_parent_class("Test3");

// Task 12
echo is_subclass_of("Test5", "Test1");

// Task 13
var_dump(get_declared_classes());