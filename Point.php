<?php

class Point {
    public $x;
    public $y;
    
    public function __construct($x = 0, $y = 0){
        $this->x = $x;
        $this->y = $y;
    }

    public function __destruct(){}

    public function __toString(){
        return "({$this->x}, {$this->y})";
    }
    
    public function input(){
        $x = readline("Введите значение координаты х: ");
        $y = readline("Введите значение координаты y: ");

        echo "Координаты x, y: ".$this->x.", ".$this->y."<br>";
    }
};