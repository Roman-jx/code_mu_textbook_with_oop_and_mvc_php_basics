<?php
namespace Core;
class Track{
    private $controller;
    private $action;
    private $params;
    public function __construct($controller, $params, $action){
        $this->action = $action;
        $this->params = $params;
        $this->controller = $controller;
    }
    public function __get($property){
        return $this->$property;
    }
}