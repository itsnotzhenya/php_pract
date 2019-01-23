<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="authForm" method="GET" action="pract1.php">
        <input type="text" name="x" placeholder="x=">
        <input type="text" name="y" placeholder="y=">
        <input type="submit">
        <input type="text" name="a" placeholder="a=">
        <input type="text" name="b" placeholder="b=">
        <input type="submit">
    </form>
</body>
</html>

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

class Graphicpoint extends Point {
    public $c;

    public function lenght($x, $y){
        echo "Длина отрезка = ".($y - $x);
    }
};

$x = $_GET['x'];
$y = $_GET['y'];
$a = $_GET['a'];
$b = $_GET['b'];
$mypoint = new Point($x, $y);
$mypoint->input();

$two = new Graphicpoint();
$two->lenght($a, $b);
?>
