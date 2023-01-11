<?php

namespace app\models\Figure;

class Rectangle extends Figure
{   
    public $height;
    public $width;
     

    public function __construct($height = null, $width = null)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function getPerimeter() 

    {
        return ($this->height + $this->width) * 2;
    }

}