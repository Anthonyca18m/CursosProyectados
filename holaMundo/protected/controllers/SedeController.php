<?php

class SedeController extends Controller
{
    
    public function actionListarSedes($id)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');

        $cond = new CDbCriteria;
        $cond->condition = 'empresa_id = :empresa_id';
        $cond->params = array(':empresa_id' => $id);
        $data = Sede::model()->findAll($cond);
        echo CJSON::encode($data);
        Yii::app()->end();
    }
}