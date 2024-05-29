<?php

// ruta: /holaMundo/hola/index
class HolaController extends Controller
{
    public function actionIndex()
    {
        $model = User::model()->findAll();

        $twitter = '@dwdmifnef';
        
        $this->render('index', [
            'model' => $model, 
            'twitter' => $twitter
        ]);
    }
}