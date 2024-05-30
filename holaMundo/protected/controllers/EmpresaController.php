<?php

class EmpresaController extends Controller
{
    public function actionIndex()
    {
        $data = Empresa::model()->findAll();

        $this->render('index', [
            'data' => $data
        ]);
    }

    public function actionListar()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');

        $cond = new CDbCriteria;
        $cond->condition = 'estado = :estado';
        $cond->params = array(':estado' => 1);
        $data = Empresa::model()->findAll($cond);
        echo CJSON::encode($data);
        Yii::app()->end();
    }

    public function actionActualizar($id)
    {
        $model = Empresa::model()->findByPk($id); 
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

    public function actionRegistrar()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        
        $model = new Empresa();
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

    public function actionEliminar($id)
    {
        $model = Empresa::model()->deleteByPk($id);
        Yii::app()->end();
    }
}