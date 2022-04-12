<?php
// Task 1
interface iTest1{

}
echo interface_exists("iTest1");
echo interface_exists("iTest2");

// Task 2
var_dump(get_declared_interfaces());