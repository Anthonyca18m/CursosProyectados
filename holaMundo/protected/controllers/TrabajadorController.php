<?php

class TrabajadorController extends Controller
{
    
    public function actionListarPorEmpresa($id)
    {
        $response = array();
        $empresa = Empresa::model()->findByPk($id); 
        if ($empresa === null) throw new CHttpException(404, 'La empresa no existe.');
        
        $connect = Yii::app()->db;      
        $query = $connect->createCommand("CALL obtenerTrabajadoresPorEmpresa(:empresa_id)");
        $query->bindParam(":empresa_id", $id, PDO::PARAM_INT);
        $response = $query->queryAll();

        header('Content-Type: application/json');
        echo CJSON::encode($response);
        Yii::app()->end();
    }

    public function actionTest()
    {
        echo Yii::app()->Happy->hi();
        Yii::app()->Happy->param1 = 'param1';
        echo Yii::app()->Happy->hi();
    }

    // public function actionRegistrar()
    // {
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
        
    //     $model = new Sede();
    //     $model->attributes = $_POST['model'];
        
    //     if (!$model->validate()) 
    //     {
    //         echo json_encode(['errores' => $model->getErrors()]);
    //         http_response_code(422);
    //         Yii::app()->end();
    //     }

    //     $model->estado = 1;
    //     $model->creado_por = 'db';
    //     $model->save();
    //     echo json_encode($model);
    //     Yii::app()->end();
    // }

    // public function actionActualizar($id)
    // {
    //     $model = Sede::model()->findByPk($id); 
    //     $model->scenario = 'update';
    //     $model->attributes = $_POST['model'];

    //     if (!$model->validate()) 
    //     {
    //         echo json_encode(['errores' => $model->getErrors()]);
    //         http_response_code(422);
    //         Yii::app()->end();
    //     }
        
    //     $model->modificado_el = date('Y-m-d H:i:s');
    //     $model->modificado_por = 'db';
    //     $model->save();
    //     echo json_encode($model);
    //     Yii::app()->end();
    // }


    // public function actionEliminar($id)
    // {
    //     $model = Sede::model()->deleteByPk($id);
    //     Yii::app()->end();
    // }
}