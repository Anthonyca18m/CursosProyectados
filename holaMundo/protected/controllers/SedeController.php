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

    public function actionRegistrar()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        
        $model = new Sede();
        $model->attributes = $_POST['model'];
        
        if (!$model->validate()) 
        {
            echo json_encode(['errores' => $model->getErrors()]);
            http_response_code(422);
            Yii::app()->end();
        }

        $model->estado = 1;
        $model->creado_por = 'db';
        $model->save();
        echo json_encode($model);
        Yii::app()->end();
    }

    public function actionActualizar($id)
    {
        $model = Sede::model()->findByPk($id); 
        $model->scenario = 'update';
        $model->attributes = $_POST['model'];

        if (!$model->validate()) 
        {
            echo json_encode(['errores' => $model->getErrors()]);
            http_response_code(422);
            Yii::app()->end();
        }
        
        $model->modificado_el = date('Y-m-d H:i:s');
        $model->modificado_por = 'db';
        $model->save();
        echo json_encode($model);
        Yii::app()->end();
    }


    public function actionEliminar($id)
    {
        $model = Sede::model()->deleteByPk($id);
        Yii::app()->end();
    }
}