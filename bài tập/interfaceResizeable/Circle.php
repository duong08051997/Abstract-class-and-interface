<?php
include_once ('Resizeable.php');

class Circle implements Resizeable{

    public $radius;

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function circleArea()
    {
       return pi()*$this->radius**2;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function resize()
    {
        echo "dien tich hinh tron thay doi la: ".$this->circleArea();
    }

}