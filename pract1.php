<!-- 12. Объявить основной класс с именем Point, с следующими данными: координаты точки: х, у;
конструктор; деструктор; функция ввода данных; и второстепенный класс Graphicpoint.
В этом классе добавляются новые данные: с – цвет точки; функция которая при вводе
числовых значений другой точки возвращает длину отрезка. -->

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

require "Graphicpoint.php";

$x = $_GET['x'];
$y = $_GET['y'];
$a = $_GET['a'];
$b = $_GET['b'];

$onePpoint = new Point($x, $y);
$onePpoint->input();

$twoPoint = new Graphicpoint();
$twoPoint->lenght($a, $b);

