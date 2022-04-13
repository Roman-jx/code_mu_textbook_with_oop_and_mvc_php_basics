<?php
// Task 1
class Date{
    public function __construct($date = null){
        if ($date == null){
            return date("Y-m-d H:i:s");
        }
    }
    public function getDay(){
        return date("d");
    }
    public function getMonth($lang = null){
        if ($lang == "en"){
            return date("F");
        }
    }
    public function getYear(){
        return date("Y");
    }
    public function getWeekDay($lang = null){
        if ($lang == "en"){
            return date("l");
        }
    }
    public function subDay($value){
        $date=date_create(date("Y-m-d"));
        date_sub($date,date_interval_create_from_date_string("$value day"));
        return date_format($date,"Y-m-d");
    }
    public function addMonth($value){
        $date=date_create(date("Y-m-d"));
        date_sub($date,date_interval_create_from_date_string("$value month"));
        return date_format($date,"Y-m-d");
    }
    public function subMonth($value){
        $date=date_create(date("Y-m-d"));
        date_sub($date,date_interval_create_from_date_string("$value month"));
        return  date_format($date,"Y-m-d");
    }
    public function addYear($value){
        $date=date_create(date("Y-m-d"));
        date_sub($date,date_interval_create_from_date_string("$value year"));
        return date_format($date,"Y-m-d");
    }
    public function subYear($value){
        $date=date_create(date("Y-m-d"));
        date_sub($date,date_interval_create_from_date_string("$value year"));
        return date_format($date,"Y-m-d");
    }
    public function format($format){
        return date($format);
    }
    public function __toString(): string{
        return date("Y-m-d");
    }
}
$date = new Date("2003-12-31");
echo $date->getYear();
echo $date->getMonth();
echo $date->getDay();

echo $date->getWeekDay();
echo $date->getWeekDay("en");

echo (new Date("2025-12-31"))->addYear(1);
