<?php
interface iSphere{
    const PI = 3.14;
    public function __construct($r);
    public function getVolume();
    public function getSquare();
}
class Sphere implements iSphere{
    public function __construct($r){
        $this->r = $r;
    }
    public function getVolume(){
        return pow($this->r, 3);
    }
    public function getSquare(){
        return 6 * pow($this->r, 2);
    }
}
$sp = new Sphere(42);
echo $sp->getSquare();
echo $sp->getVolume();