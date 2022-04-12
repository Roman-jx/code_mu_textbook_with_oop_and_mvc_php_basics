<?php
trait TestTrait{
    private function method(){
        return "!!!";
    }
}
class Test{
    use TestTrait{
        TestTrait::method as public;
    }
}
$test = new Test();
echo $test->method();
