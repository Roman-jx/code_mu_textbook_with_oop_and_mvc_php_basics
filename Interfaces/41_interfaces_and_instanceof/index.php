<?php
// Task 1
interface Figure3d{
  public function getVolume();
  public function getSurfaceSquare();
}
class Cube implements Figure3d{
  private $a;
  public function __construct($a){
    $this->a = $a;
  }
  public function getVolume(){
    return pow($this->a, 3);
  }
  public function getSurfaceSquare(){
    return 6 * pow($this->a, 2);
  }
}
class Quadrate{

}
class Rectangle{

}


$cube = new Cube(42);
$cube2 = new Cube(63);

$quad = new Quadrate();
$quad2 = new Quadrate();

$rect = new Rectangle();
$rect2 = new Rectangle();

$arr = [
  $cube, $cube2, $quad, $quad2, $rect, $rect2,
];