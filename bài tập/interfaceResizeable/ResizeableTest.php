<?php
include_once ('Circle.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new  Circle(2);
$rectangle = new Rectangle(3,2);
$square = new Square(1);

$circle->resize();
echo '<br>';
$rectangle->resize();
echo '<br>';
$square->resize();

