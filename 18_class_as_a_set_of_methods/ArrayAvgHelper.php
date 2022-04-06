<?php
class ArrayAvgHelper{
    public function getAvg1($arr){
        return $this->getSum($arr, 1);
    }
    public function getAvg2($arr){
        return $this->calcSqrt($this->getSum($arr, 2));
    }
    public function getAvg3($arr){
        return $this->calcSqrt($this->getSum($arr, 3));
    }
    public function getAvg4($arr){
        return $this->calcSqrt($this->getSum($arr, 4));
    }
    private function getSum($arr, int $power){
        $summa = 0;
        foreach ($arr as $a){
            $summa += pow($a, $power);
        }
        return $summa;
    }
    private function calcSqrt($num){
        return sqrt($num);
    }
}
?>