<?php
require_once "Employee.php";
class EmployeesCollection{
    private $employees = [];
    public function add($newEmp){
        if (!in_array($newEmp, $this->employees, false)){
            $this->employees[] = $newEmp;
        }
    }
    public function get(){
        return $this->employees;
    }
//    private function exists($newEmp){
//        foreach ($this->employees as $emp) {
//            if ($emp === $newEmp) {
//                return true;
//            }
//        }
//        return  false;
//    }
}