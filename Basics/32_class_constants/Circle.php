<?php
class Circle{
    const PI = 3.14;
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function getSquare(){
        return self::PI * pow($this->radius, 2);
    }
    public function getCircuit(){
        return 2 * self::PI * $this->radius;
    }
}