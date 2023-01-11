<?php
namespace app\controllers;

use app\interfaces\IRenderer;
//use app\models\Basket;
//use app\models\Users;
use app\models\repositories\BasketRepository;
use app\models\repositories\UserRepository;

class Controller
{
    private $action;
    private $defaultAction = 'index';
    private $layout = 'main';
    private $useLayout = true;

    protected $render;
    protected $request;

    public function __construct(IRenderer $render,$request)
    {
        $this->render = $render;
        $this->request = $request;
    }



    public function runAction($action)
    {

        $this->action = $action ?? $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        }
    }

    public function render($template, $params = [])
    {
        if ($this->useLayout) {
            return $this->renderTemplate('layouts/' . $this->layout, [
                'menu' => $this->renderTemplate('menu', [
                    'isAuth' => (new UserRepository())->isAuth(),
                    'isAdmin' => (new UserRepository())->isAdmin(),
                    'username' => (new UserRepository())->getName(),
                    'count' => (new BasketRepository())->getCountWhere('session_id', session_id()),
                ]),
                'content' => $this->renderTemplate($template, $params)
            ]);
        } else
        {
            return $this->renderTemplate($template, $params);
        }


    }

    public function renderTemplate($template, $params = [])
    {
        echo $this->render->renderTemplate($template, $params);
    }

}