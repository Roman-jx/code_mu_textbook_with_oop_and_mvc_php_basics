<?php
require_once "User.php";
$usr = new User("John", 21);
$methods = [
    "method1" => "getName",
    "method2" => "getAge"
];
echo "Your name is ".$usr->{$methods["method1"]}()." and age ".$usr->{$methods["method2"]}();
?>