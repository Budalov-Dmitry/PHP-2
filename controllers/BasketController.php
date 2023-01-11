<?php

namespace app\controllers;
use app\engine\App;
//use app\models\Basket;
use app\engine\Request;
use app\models\entities\Basket;
use app\models\repositories\BasketRepository;

class BasketController extends Controller
{

    public function actionIndex() {
        $session_id = session_id();
        //$basket = App::call()->basketRepository->getBasket($session_id);
        $basket = (new BasketRepository())->getBasket($session_id);
        echo $this->render('basket' , [
            'catalog' => $basket
        ]);
    }

    public function actionAdd()
    {
        //$id = (new Request())->getParams()['id'];
        //$id = App::call()->request->getParams()['id'];
        $id = $this->request->getParams()['id'];
        $session_id = session_id();

        $basket = new Basket($session_id, $id); //создаем сущность с данными

//        App::call()->basketRepository->save($basket);
        (new Basket($session_id, $id))->save();


        $response = [
           'success' => 'ok',
           'count' => (new BasketRepository())->getCountWhere('session_id', $session_id)
       ];
       echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
       die();
    }

    public function actionRemove()
    {

        $id = $this->request->getParams()['id'];
        //$id = App::call()->request->getParams()['id'];
        $session_id = session_id();
        $error = "ok";

        $basket = (new BasketRepository())->getOne($id);
            (new BasketRepository())->delete($basket);

//        $basket = App::call()->basketRepository->getOne($id);
//        if ($session_id == $basket->session_id) {
//            App::call()->basketRepository->delete($basket);
//        } else {
//            $error = "error";
//        }

//        $basket = new Basket($session_id, $id); //создаем сущность с данными
//
//        (new BasketRepository())->getOne($id)->delete($basket);;


         //Basket::getOne($id)->delete();


        $response = [
            'success' => 'ok',
            'count' =>(new BasketRepository())->getCountWhere('session_id', $session_id),
            'id' => $id
        ];
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        die();
    }
}