<?php
require_once "User.php";
$student = new User("John", "Johnyn", "2002-03-06");
$student->calculateAge("2003-02-11");
?>