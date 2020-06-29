<?php
include_once ('Colorable.php');
class Square implements Colorable{
    public function howToColor()
    {
        return "all four sides";
    }
}
$square = new Square();
echo $square->howToColor();
