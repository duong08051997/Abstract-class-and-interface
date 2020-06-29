<?php
include_once ('Circle.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new  Circle();
$rectangle = new Rectangle();
$square = new Square();

$circle->resize();
echo '<br>';
$rectangle->resize();
echo '<br>';
$square->resize();

