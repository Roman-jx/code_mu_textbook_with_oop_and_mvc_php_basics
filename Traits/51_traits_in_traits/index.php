<?php
// Task 1
trait Trait1{
    private function method1(){
        return 1;
    }
    private function method2(){
        return 2;
    }
}
trait Trait9{
    use Trait1;
    private function method3(){
        return 3;
    }
}
class Test{
    use Trait9;
    public function getSum(){
        return $this->method1() + $this->method2() + $this->method3();
    }
}
$tes = new Test();
echo $tes->getSum();