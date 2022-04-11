<?php
// Task 1
require_once "User.php";
$obj = new User("John", "Jonhy");
echo $obj::$counter;

$obj = new User("John2", "Jonhy2");
echo $obj::$counter;

// Task 2
$obj = new NewUser("Sony", "Jilych");
echo $obj::getCount();

$obj = new NewUser("Kily", "Filych");
echo $obj::getCount();
