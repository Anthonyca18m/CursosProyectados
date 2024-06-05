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
        // echo Yii::app()->Happy->hi();
        // Yii::app()->Happy->param1 = 'param1';
        // echo Yii::app()->Happy->hi();

        // echo Yii::app()->request->baseUrl .'<br>';
        // echo Yii::app()->request->requestUri .'<br>';
        // echo Yii::app()->request->pathInfo .'<br>';
        // echo Yii::app()->request->urlReferrer .'<br>';
        // echo Yii::app()->request->queryString .'<br>';

        // echo Yii::app()->request->getQuery('param1', 'DEFAULT_VALUE') .'<br>';
        // // echo Yii::app()->request->getPost('param1', 'DEFAULT_VALUE') .'<br>';
        // // echo Yii::app()->request->getParam('param1', 'DEFAULT_VALUE') .'<br>';
        // echo ($_GET['param1'] ?? 'DEFAULT_VALUE') .'<br>';

        // $content = $this->renderPartial('excel', array('model' => [0,1,2,3]), true);
        // Yii::app()->request->sendFile('nombre_archivo.xls', $content);

        // echo Yii::app()->user->setState('MyvarSession', 'valor') .'<br>';
        // echo Yii::app()->user->getState('MyvarSession') .'<br>';
        // echo Yii::app()->user->hasState('MyvarSession') .'<br>';
        

        // Yii::app()->user->login(CUserIdentity, 60 /*segundos */);
        // Yi::app()->user->logout();
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