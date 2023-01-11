<?php

namespace app\models\Figure;

abstract class Figure 
{

    abstract public function getArea();

    abstract public function getPerimeter();

    public function info() 
    {   
        $classname = str_replace('app\\models\\Figure\\','', get_class($this));

        echo 'Периметр '.$classname.' = '.$this->getPerimeter().'<br>'. 'Площадь '.$classname.' = '.$this->getArea().'<br>';
    }

  
}