<?php
class Arr{
    private $numbers = [];
    public function add($add){
        $this->numbers[] = $add;
    }
    public function getSum(){
        return array_sum($this->numbers);
    }
    public function getAvg(){
        return array_sum($this->numbers)/count($this->numbers);
    }
}
?>