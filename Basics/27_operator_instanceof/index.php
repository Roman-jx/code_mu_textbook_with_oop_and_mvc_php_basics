<?php
require_once "UsersCollection.php";
class Employee {
    public $name;
    public $salary;
    public function __construct($name, $salary){
        $this->name =  $name;
        $this->salary = $salary;
    }
}
class Student{
    public $name;
    public $scholarship;
    public function __construct($name, $scholarship){
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}
$arr = [
    new Employee("John", 1000),
    new Employee("John2", 2000),
    new Employee("John3", 3000),
    new Student("Petro", 19),
    new Student("Lisa", 21),
    new Student("Pery", 20),
];
$sum_emp = 0;
$sum_stud = 0;
foreach ($arr as $a){
    if ($a instanceof Employee){
        echo $a->name;
        $sum_emp += $a->salary;
    } elseif ($a instanceof  Student){
        echo $a->name;
        $sum_stud += $a->scholarship;
    }
}
echo $sum_emp." ".$sum_stud;

class User{
    public $name;
    public $surname;
    public function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
}
class Employee18 extends User{
    public $salary;
    public function __construct(string $name, int $age, $salary)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;
    }
}
class City{
    public $name;
    public $population;
    public function __construct($name, $population){
        $this->name = $name;
        $this->population = $population;
    }
}
$arr = [
    new User("Yura", 21),
    new Employee18("John", 18, 2000),
    new City("Ukraine", 42000000),
];
foreach ($arr as $a){
    if ($a instanceof User or $a instanceof Employee18){
        echo $a->name;
    } elseif (!($a instanceof User or $a instanceof Employee18)){
        echo $a->name;
    } elseif ($a instanceof User){
        echo $a->name;
    }
}$usersCollection = new UsersCollection();
$usersCollection->add(new Employee("Jonh", 200));
$usersCollection->add(new Student("Eric", 100));

$usersCollection->add(new Employee("Kyle", 300));
$usersCollection->add(new Student("Luis", 400));

echo $usersCollection->getTotalScholarship();
echo $usersCollection->getTotalSalary();
echo $usersCollection->getTotalPayment();
