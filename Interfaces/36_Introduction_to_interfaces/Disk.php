<?php
interface Figure{
    public function getArea();
    public function getLength();
}
class Disk implements Figure{
    const PI = 3.14;
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getArea(){
        return self::PI * pow($this->radius, 2);
    }
    public function getLength(){
        return 2 * self::PI * $this->radius;
    }
}