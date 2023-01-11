<?php

namespace app\models\repositories;

use app\engine\Db;
use app\models\entities\Basket;
use app\models\Repository;

class BasketRepository extends Repository
{

    public  function getBasket($session_id) {
        $tableName =  $this->getTableName();
        $sql = "SELECT 
            basket.id,
            description,
            price,
            image
            FROM `{$tableName}` 
            JOIN products ON `{$tableName}`.`product_id` = products.id
            WHERE `session_id` = :session_id AND basket.product_id = products.id
            ORDER BY id; ";
        return Db::getInstance()->queryAll($sql, ['session_id' => $session_id]);
    }

    protected function getEntityClass() {
        return Basket::class;
    }

    protected function getTableName()
    {
        return 'basket';
    }
}