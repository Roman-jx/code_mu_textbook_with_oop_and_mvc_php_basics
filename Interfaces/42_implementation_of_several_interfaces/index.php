<?php
interface iCircle{
  public function getRadius();
  public function getDiameter();
}
interface iFigure extends iCircle {

}
interface iTetragon extends iFigure {

}
class Dist implements iTetragon {
    public function getRadius()
    {
        // TODO: Implement getRadius() method.
    }
    public function getDiameter()
    {
        // TODO: Implement getDiameter() method.
    }
}
class Rectangle implements iTetragon{
    public function getDiameter()
    {
        // TODO: Implement getDiameter() method.
    }
    public function getRadius()
    {
        // TODO: Implement getRadius() method.
    }
}