<?php
class Arr{
    private $numbers = [];
    public function __construct(array $numbers){
        $this->numbers = $numbers;
    }
    public function add($number){
        $this->numbers[] = $number;
    }
    public function getSum(){
        return array_sum($this->numbers);
    }
}
?>