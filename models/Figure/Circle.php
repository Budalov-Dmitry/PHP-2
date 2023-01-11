<?php

namespace app\models\Figure;

class Circle extends Figure
{   
    public $radius;
    
     

    public function __construct($radius = null)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }

    public function getPerimeter() 

    {
        return 3.14 * $this->radius * 2;
    }

}