<?php

namespace app\controllers;
use app\engine\App;


use app\models\repositories\ProductRepository;

class ProductController extends Controller
{

    public function actionIndex()
    {
        echo $this->render('index');
    }

    public function actionCatalog()
    {
        $page = $this->request->getParams()['page'] ?? 0;
//        $page = App::call()->request->getParams()['page'] ?? 0;
//        $catalog = App::call()->productRepository->getLimit($page + 2); //LIMIT 0, 2 //LIMIT 0, 4
        $catalog = (new ProductRepository())->getLimit($page + 2) ;

        echo $this->render('catalog', [
            'catalog' => $catalog,
            'page' => ++$page
        ]);
    }

    public function actionOneProduct()
    {

        $id = $this->request->getParams()['id'];
        $product = (new ProductRepository())->getOne($id);
//        $id = App::call()->request->getParams()['id'];
//        $product = App::call()->productRepository->getOne($id);

        echo $this->render('OneProduct', [
            'product' => $product
        ]);
    }



}