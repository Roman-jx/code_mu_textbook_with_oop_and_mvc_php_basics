<?php
// Task 1
trait TestTrait{
    public function method(){
        return "trait";
    }
    abstract public function method2();
}
class Test{
    use TestTrait;
    public function method2(){
        return "not error!";
    }
}
$test = new Test();
echo $test->method2();