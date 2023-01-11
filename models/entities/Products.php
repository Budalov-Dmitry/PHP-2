<?php
namespace app\models\entities;


use app\models\Entity;


class Products extends Entity
{
    protected $id;
    protected $image;
    protected $description;
    protected $price;


    protected $props = [
        'image' => false,
        'description' => false,
        'price' => false,
    ];


    public function __construct($image = null, $description = null, $price = null)
    {
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
    }



}