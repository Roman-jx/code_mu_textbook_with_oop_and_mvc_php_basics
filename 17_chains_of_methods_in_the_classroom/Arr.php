<?php
class Arr1{
    private $numbers = [];
    public function add(int $number){
        $this->numbers[] = $number;
        return $this;
    }
    public function push(...$number){
        $this->numbers = array_merge($this->numbers, $number);
        return $this;
    }
    public function getSum(){
        return array_sum($this->numbers);
    }
}
?>