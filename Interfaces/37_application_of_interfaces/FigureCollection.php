<?php
class FigureCollection{
    private $figures = [];
    public function addFigure(Figure $figure){
        $this->figures[] = $figure;
    }
    public function getTotalSquare(){
        $sum=0;
        foreach ($this->figures as $figure){
            $sum += $figure->getSquare();
        }
        return $sum;
    }
    public function getTotalPerimeter(){
        $sum=0;
        foreach ($this->figures as $figure){
            $sum += $figure->getPerimeter();
        }
    }
}