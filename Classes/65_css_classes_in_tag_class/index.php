<?php
// Task 1
class Tag{
    private $name;
    private $attrs = [];
    public function __construct($name){
        $this->name = $name;
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


echo (new Tag('input'))->addClass('eee')->openTag();

echo (new Tag('input'))->addClass('eee')->addClass('bbb')->openTag();


echo (new Tag('input'))
    ->setAttr('class', 'eee bbb')
    ->addClass('kkk')->openTag();


echo (new Tag('input'))
    ->setAttr('class', 'eee bbb')
    ->addClass('eee')
    ->openTag();

echo (new Tag('input'))
    ->addClass('eee')
    ->addClass('bbb')
    ->addClass('eee')
    ->openTag();
//echo (new Tag('input'))
//    ->setAttr('class', 'eee zzz kkk')
//    ->removeClass('zzz')
//    ->open();