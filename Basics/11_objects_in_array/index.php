<?php
require_once "City.php";
$city = [
    new City("A", 20),
    new City("B", 30),
    new City("C", 40),
    new City("D", 50),
    new City("E", 60)
];
foreach ($city as $c){
    echo $c->name." ".$c->population."<br>";
}
?>