<?php
// Task 1
class SumHelper {
    public function getSum2($arr){
        return $this->getSum($arr, 2);
    }
    public  function getSum3($arr){
        return $this->getSum($arr, 3);
    }
    private function getSum($arr, $power){
        $sum = 0;
        foreach ($arr as $elem){
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}
class AvgHelper{
    public function getAvg($arr){
        return array_sum($arr) / count($arr);
    }
    public  function getMeanSquare($arr){
        return sqrt(array_sum(array_map("Pow2", $arr))/count($arr));
    }
    public function Pow2($num){
        return pow($num, 2);
    }
}
class Arr{
    private $nums = [];
    private $sumHelper;
    private $avghelper;
    public function __construct(){
        $this->sumHelper = new SumHelper();
        $this->avghelper = new AvgHelper();
    }
    public function getSum23(){
        $nums = $this->nums;
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }
    public function getAvgMeanSum(){
        return $this->avghelper->getAvg($this->nums) + $this->avghelper->getMeanSquare($this->nums);
    }
    public function add($number){
        $this->nums[] = $number;
    }
}
$arr = new Arr();
$arr->add(1);$arr->add(2);$arr->add(3);
echo $arr->getSum23();