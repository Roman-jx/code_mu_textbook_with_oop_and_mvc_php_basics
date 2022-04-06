<?php
//Init class
class Employee{
    public $name;
    public $age;
    public $salary;

    //return name employee
    public function getName(){
        return $this->name;
    }
    //return age employee
    public function getAge(){
        return $this->age;
    }
    //return salary employee
    public function getSalary(){
        return $this->salary;
    }
    //checks years
    public function checkAge($age_emp){
        if ($age_emp > 18){
            return true;
        }
        return false;
    }
}
//Create objs
// $emp = new Employee();
// $emp->name = "John";
// $emp->age = 25;
// $emp->salary = 4000;

// $emp2 = new Employee();
// $emp2->name = "John";
// $emp2->age = 25;
// $emp2->salary = 4000;

//print
echo $emp->getSalary() + $emp2->getSalary();

//Init class
class User{
    public $name;
    public $age;
    
    //create method setAge
    public function setAge(int $age){
        // $this->age = $age;
        if ($age >= 18){
            $this->age = $age;
        } else {
            echo "Your are under 18...";
        }
    }
}
//create obj
// $usr = new User();
// $usr->name = "John";
// $usr->age = 25;
// //set new value
// $usr->setAge(30);
// //print
// echo $usr->age;

//Init class
class Employee2{
    public $name;
    public $salary;

    //create method doubleSalary
    public function doubleSalary(){
        //multp value
        $this->salary *= 2;
    }
}

//Init class
class Rectangle{
    public $width;
    public $height;

    //create method getSquare
    public function getSquare(){
        return $this->width * $this->height;
    }

    //create method getPerimeter
    public function getPerimeter(){
        return ($this->width + $this->height) * 2;
    }
}






























?>