<?php

define('CONT_NAME', 'app\\controllers\\');
define("TEMPLATES_DIR", '../templates/');
define("TWIG_TEMPLATES_DIR", '../twig_views/');

use app\engine\Db;
use app\engine\Request;
use app\models\repositories\BasketRepository;
use app\models\repositories\ProductRepository;
use app\models\repositories\UserRepository;

return [
    'root' => dirname(__DIR__),
    'CONT_NAME' => 'app\\controllers\\',
    'TEMPLATES_DIR' => dirname(__DIR__) . "../templates/",
    'components' =>
        [
            'db' => [
                'class' => Db::class,
                'driver' => 'mysql',
                'host' => 'localhost:3307',
                'login' => 'root',
                'password' => 'root',
                'database' => 'gallery',
                'charset' => 'utf8'
            ],
            'request' => [
                'class' => Request::class
            ],
            'basketRepository' => [
                'class' => BasketRepository::class
            ],
            'productRepository' => [
                'class' => ProductRepository::class
            ],
            'usersRepository' => [
                'class' => UserRepository::class
            ]
        ]
];