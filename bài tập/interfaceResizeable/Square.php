<?php
include_once ('Resizeable.php');
class Square implements Resizeable{
    public $length;

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }
    public function __construct($length)
    {
        $this->length = $length;
    }
    public function squareArea()
    {
        return $this->getLength()**2;
    }
    public function resize()
    {
       echo 'dien tich hinh vuong thay doi la: '.$this->squareArea();
    }
}