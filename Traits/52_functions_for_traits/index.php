<?php
// Task 1
trait Test12{
    public function getName(){
        return "John";
    }
}

echo trait_exists("Test12");
echo trait_exists("Test13");

// Task 2
var_dump(get_declared_traits());