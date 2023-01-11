<?php

namespace app\models\Figure;

class Triangle extends Figure
{   
    public $side1;
    public $side2;
    public $side3;
    

    public function __construct($side1 = null,$side2 = null,$side3 = null)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getArea() 
    {
       
    }

    public function getPerimeter() 

    {
        
    }

}