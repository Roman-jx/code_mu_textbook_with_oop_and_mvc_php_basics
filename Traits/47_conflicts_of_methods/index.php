<?php
trait Trait1{
    public function method(){
        return 1;
    }
}
trait Trait2{
    public function method(){
        return 2;
    }
}
trait Trait3{
    public function method(){
        return 3;
    }
}
class Test{
    use Trait1, Trait2, Trait3{
        Trait1::method insteadof Trait2;
        Trait1::method insteadof Trait3;
        Trait1::method as mat1;
        Trait2::method as mat2;
        Trait3::method as mat3;
    }
    public function getSum(){
        return $this->mat1() + $this->mat2() + $this->mat3();
    }
}
$test = new Test();
echo $test->getSum();
