<?php
namespace Core;
class Page{
    private $layout;
    private $title;
    private $view;
    private $data;
    public function __construct($layout, $data, $view, $title){
        $this->data = $data;
        $this->layout = $layout;
        $this->title = $title;
        $this->view = $view;
    }
    public function __get($property){
        return $this->$property;
    }
}
