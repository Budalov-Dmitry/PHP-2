<?php
namespace app\models;


class Orders extends Model
{
    protected $id;
    protected $image;
    protected $description;
    protected $price;
    protected $basket_id;
    protected $firstname;
    protected $lastname;
    protected $phone;
    protected $user_id;

    /**
     * @param $id
     * @param $image
     * @param $description
     * @param $price
     * @param $basket_id
     * @param $firstname
     * @param $lastname
     * @param $phone
     * @param $user_id
     */
    public function __construct($id, $image, $description, $price, $basket_id, $firstname, $lastname, $phone, $user_id)
    {
        $this->id = $id;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
        $this->basket_id = $basket_id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->user_id = $user_id;
    }


    public static function getTableName()
    {
        return 'orders';
    }
}