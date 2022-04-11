<?php
require_once "Student.php";
$student = new Student("John");
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
?>