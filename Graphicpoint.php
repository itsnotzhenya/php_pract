<?php

require "Point.php";

class Graphicpoint extends Point {
    public $c;

    public function __construct($c = "red"){
        $this->c = $c;
    }

    public function lenght($x, $y){
        echo "Длина отрезка($x, $y) = ".($y - $x);
    }
};