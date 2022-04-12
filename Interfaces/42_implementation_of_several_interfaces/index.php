interface iCircle{
  public function getRadius();
  public function getDiameter();
}
interface iFigure{

}
interface iTetragon{

}
class Dist implements iFigure, iCircle{

}
class Rectangle implements iFigure, iTetragon{

}