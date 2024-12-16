<?php 
declare(strict_types = 1);

require_once("ClassRectangle.php");
require_once("ClassTriangle.php");

$triangle1 = new Triangle(2.5, 4);
echo "El triángulo tiene un área de " . $triangle1->calculateArea() . "cm².".PHP_EOL;
$rectangle1 = new Rectangle(4, 6.2);
echo "El rectángulo tiene un área de " . $rectangle1->calculateArea() . "cm².".PHP_EOL;

 ?>

