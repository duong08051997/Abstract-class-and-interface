<?php
include_once ('Resizeable.php');
class Rectangle implements Resizeable{

    public $height;
    public $width;

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function __construct($height,$width)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function rectangleArea()
    {
        return $this->height * $this->width;
    }

    public function resize()
    {
        echo 'dien tich hinh chu nhat thay doi la: '.$this->rectangleArea();
    }

}
