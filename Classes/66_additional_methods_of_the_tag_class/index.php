<?php
class Tag{
    private $name;
    private $attrs = [];
    public function __construct($name){
        $this->name = $name;
    }
    public function getNameTag(){
        return $this->name;
    }
    public function getAttr($attr){
//        $text = "";
        if (in_array($attr, $this->attrs)){
            return $this->attrs[$attr];
        }
//        foreach ($this->attrs as $key => $value){
//            $text .= " $value";
//        }
//        return $text;
    }
    public function addClass($className){
        if (isset($this->attrs)){
            $classNames = explode(" ", $this->attrs["class"]);
            if (!in_array($className, $classNames)){
                $classNames[] = $className;
                $this->attrs["class"] = implode(" ", $classNames);
            }
        } else{
            $this->attrs["class"] = $className;
        }
        return $this;
    }
    public function setAttr($name, $value){
        $this->attrs[$name] = $value;
        return $this;
    }
    public function setAttrs($attrs){
        foreach ($attrs as $key => $value){
            $this->setAttr($key, $value);
        }
        return $this;
    }
    public function deleteAttr($name){
        unset($this->attrs["$name"]);
        return $this;
    }
    public function openTag(){
        $name = $this->name;
        $attrsStr = $this->getAttrsStr($this->attrs);
        return "<$name$attrsStr>";
    }
    public function closeTag(){
        $name = $this->name;
        return "</$name>";
    }
    public function removeClass($className){
        if (isset($this->attrs["class"])){
            $classNames = explode(" ", $this->attrs["class"]);
            if (in_array($className, $classNames)){
                $className = $this->removeElem($className, $classNames);
                $this->attrs["class"] = implode(" ", $classNames);
            }
        }
    }
    private function getAttrsStr($attrs){
        if (!empty($attrs)){
            $massive = "";
            foreach ($attrs as $key => $value){
                if ($value === true){
                    $massive .= " $key";
                } else {
                    $massive .= " $key=\"$value\"";
                }
            }
            return $massive;
        } else {
            return "";
        }
    }
    private function removeElem($elem, $arr){
        $key = array_search($elem, $arr);
        array_splice($arr, $key, 1);
        return $arr;
    }
}