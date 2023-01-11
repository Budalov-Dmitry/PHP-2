<?php
session_start();
use app\engine\App;
use app\engine\Autoload;
use app\engine\Db;
use app\engine\Render;
use app\engine\TwigRender;
use app\engine\Request;
use app\models\Products;
use app\models\Users;
use app\models\Figure\Rectangle;
use app\models\Figure\Circle;
use app\models\Figure\Triangle;

//include "../config/config.php";
include "../engine/Autoload.php";
//require_once '../vendor/autoload.php';
spl_autoload_register([new Autoload(), 'loadClass']);


$config = include "../config/config.php";

//App::call()->run($config);






$request = new Request();

$controllerName = $request->getControllerName() ?: 'product';
$actionName = $request->getActionName();

$controllerClass = CONT_NAME . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render(),$request);
    $controller->runAction($actionName);
} else {
    die("Вы не туда попали)");
}


