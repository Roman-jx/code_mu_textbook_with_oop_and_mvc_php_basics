<?php
class Num{
    public static $num1;
    public static $num2;
}
Num::$num1 = 2;
Num::$num2 = 3;
echo Num::$num1 + Num::$num2;

class Num2 {
    private static $num1 = 2;
    private static $num2 = 3;
    public static function getSum(){
        return self::$num1 + self::$num2;
    }
}
class Geometry{
    private static  $pi = 3.14;
    public static function getCircleSquare($radius){
        return self::$pi * $radius * $radius;
    }
    public static function getCircleCircuit($radius){
        return self::$pi * 2 * $radius;
    }
}

