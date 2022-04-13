<?php
// Task 1
class Tag{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function openTag(){
        $name = $this->name;
        return "<$name>";
    }
    public function closeTag(){
        $name = $this->name;
        return "</$name>";
    }
}
$tag = new Tag("div");
echo $tag->openTag()."text".$tag->closeTag();

$tag2 = new Tag("img");
echo $tag->openTag();

$tag3 = new Tag("header");
echo $tag->openTag()."header site".$tag->closeTag();
