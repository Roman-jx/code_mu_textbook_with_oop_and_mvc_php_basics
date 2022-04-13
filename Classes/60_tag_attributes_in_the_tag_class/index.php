<?php
// Task 1
class Tag{
    private $name;
    public function __construct($name, $attrs = []){
        $this->name = $name;
        $this->attrs = $attrs;
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
                $massive .= " $key=\"$value\"";
            }
            return $massive;
        } else {
            return "";
        }
    }
}
$tag = new Tag("input", [
    "id" => "test",
    "class" => "main-test",
]);
echo $tag->openTag();