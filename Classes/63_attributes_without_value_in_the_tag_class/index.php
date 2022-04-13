<?php
// Task 1
class Tag{
    private $name;
    private $attrs = [];
    public function __construct($name){
        $this->name = $name;
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
}
$tag = new Tag("input");
echo $tag
    ->setAttr("id", "test")
    ->setAttr("disabled", true)
    ->openTag();