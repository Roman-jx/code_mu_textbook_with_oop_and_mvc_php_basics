<?php
require_once "City.php";
$city = new City("John", "ID-23", 200);
$props = ["name", "foundation", "population"];
foreach ($props as $p){
    echo $city->$p." ";
}
$usr = new User("Ivanov", "Ivan", "Ivanovych");
$props = ["surname", "foundation", "population"];
echo $usr->{$props[0]};
echo $usr->{$props[1]};
echo $usr->{$props[2]};
?>