<?php
trait TestTrait{
    public function method(){
        return "trait";
    }
}
class Test{
    use TestTrait;
    public function method(){
        return "class";
    }
}
$test = new Test();
echo $test->method();

trait TestTrait2{
    public function method(){
        return "trait";
    }
}
class ParentClass {
    public function method(){
        return "parent";
    }
}
class TestClass extends ParentClass {
    use TestTrait;
}
$test = new TestClass();