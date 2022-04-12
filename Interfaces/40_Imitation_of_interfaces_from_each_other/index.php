<?php
interface iUser{
    public function getName();
    public function getAge();
    public function setName($name);
    public function setAge($age);
}
interface iEmployee extends iUser{
    public function getSalary();
    public function setSalary();
}
class Employee implements iEmployee {
    public function getName()
    {
        // TODO: Implement getName() method.
    }
    public function getSalary()
    {
        // TODO: Implement getSalary() method.
    }
    public function getAge()
    {
        // TODO: Implement getAge() method.
    }
    public function setName($name)
    {
        // TODO: Implement setName() method.
    }
    public function setAge($age)
    {
        // TODO: Implement setAge() method.
    }
    public function setSalary()
    {
        // TODO: Implement setSalary() method.
    }
}
