<?php
require_once "Interface.php";
class Image extends Tag{
    public function __construct(){
        $this->setAttr("src", "")->setAttr("alt", "");
        parent::__construct("img");
    }
}
echo (new Image())->setAttr("src", "mp.jpg")->open();