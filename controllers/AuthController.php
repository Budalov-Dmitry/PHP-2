<?php

namespace app\controllers;

//use app\models\Users;
use app\engine\App;
use app\models\repositories\UserRepository;

class AuthController extends Controller
{
    public function actionLogin()
    {

       $login = $this->request->getParams()['login'];
       $pass = $this->request->getParams()['pass'];
//        $login = App::call()->request->getParams()['login'];
//        $pass = App::call()->request->getParams()['pass'];

        //(new UserRepository())->auth($login, $pass)
       if (App::call()->usersRepository->auth($login, $pass) )
       {
           header("Location:" . $_SERVER['HTTP_REFERER']);
           die();
       } else
       {
           die("Не верный логин пароль");
       }
    }

    public function actionLogout()
    {
        session_regenerate_id();
        session_destroy();
        header("Location:" . $_SERVER['HTTP_REFERER']);
        die();
    }
}