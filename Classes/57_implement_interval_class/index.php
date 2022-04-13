<?php
// Task 1
class Interval{
    public function __construct(Date $date1, Date $date2){
        $this->date1= $date1;
        $this->date2 = $date2;
    }
    public function toDays(){
        return (strtotime($this->date2) - strtotime($this->date1)) / pow(60, 2) * 24;
    }
    public function toMonths(){
        return (strtotime($this->date2) - strtotime($this->date1)) / pow(60, 2) * (24 * 30);
    }
    public function toYear(){
        return (strtotime($this->date2) - strtotime($this->date1)) / pow(60, 2) * (24 * 30) * 12;
    }
}
$date1 = new Date("2025-12-31");
$date2 = new Date("2026-11-28");
$interval = new Interval($date1, $date2);
echo $interval->toDays();
echo $interval->toMonths();
echo $interval->toYear();
$datetime1 = strtotime('May 3, 2012 10:38:22 GMT');
$datetime2 = strtotime('06 Apr 2012 07:22:21 GMT');

$secs = $datetime2 - $datetime1;// == <seconds between the two times>
$days = $secs / 86400;