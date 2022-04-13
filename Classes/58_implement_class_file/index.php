<?php
// Task 1
interface iFile{
    public function __construct($filePath);
    public function getPath();
    public function getDir();
    public function getName();
    public function getExt();
    public function getSize();
    public function getText();
    public function setText($text);
    public function appendText($text);
    public function copy($copyPath);
    public function delete();
    public function rename($newName);
    public function replace($newPath);
}
class File implements iFile{
    public function __construct($filePath){
        $this->filePath = $filePath;
    }
    public function getPath(){
        return pathinfo($this->filePath);
    }
    public function getDir(){
        return dirname($this->filePath);
    }
    public function getName(){
        return basename($this->filePath);
    }
    public function getExt(){
        return (pathinfo($this->filePath))["extension"];
    }
    public function getSize(){
        return filesize($this->filePath);
    }
    public function getText(){
        return file_get_contents($this->filePath);
    }
    public function setText($text){
        return file_put_contents($this->filePath, " ".$text);
    }
    public function appendText($text){
        return file_put_contents($this->filePath, $text);
    }
    public function copy($copyPath){
        return copy($this->filePath, $copyPath);
    }
    public function delete(){
        return unlink($this->filePath);
    }
    public function replace($newPath){
        return rename($this->filePath, $newPath);
    }
    public function rename($newName){
        return rename($this->filePath, $newName);
    }
}