<?php
class City{
    public $name;
    public $foundation;
    public $population;
    public function __construct(
        string $name,
        string $foundation,
        int $population
        ){
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}
class User{
    public $surname;
    public $name;
    public $patronymic;
    public function __construct(
        string $surname, 
        string $name,
        string $patronymic
        ){
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }
}
?>