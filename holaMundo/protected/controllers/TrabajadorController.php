<?php

class TrabajadorController extends Controller
{
    
    public function actionListarPorEmpresa($id)
    {
        $response = array();
        $empresa = Empresa::model()->findByPk($id); 
        if ($empresa === null) throw new CHttpException(404, 'La empresa no existe.');
        
        $connect = Yii::app()->db;
        $sql = "SELECT 
                st.sede_id,
                st.trabajador_id,
                s.nombre as sede_desc,
                t.nombres as trb_nom,
                t.apellidos as trb_ape,
                td.nombre as tipo_doc,
                t.documento,
                t.celular,
                c.id as cargo_id,
                c.nombre as cargo,
                st.estado,
                st.creado_el
                FROM sedes_trabajadores st	
                    INNER JOIN sedes s ON st.sede_id = s.id
                    INNER JOIN trabajadores t ON st.trabajador_id = t.id
                    INNER JOIN tipos_documentos td ON t.tipoDocumento_id = td.id
                    INNER JOIN cargos c ON t.cargo_id = c.id 
                    WHERE s.empresa_id IN (:empresa_id)
        ";
        $command = $connect->createCommand($sql);
        $command->bindParam(":empresa_id", $id, PDO::PARAM_INT);
        $response = $command->queryAll();

        header('Content-Type: application/json');
        echo CJSON::encode($response);
        Yii::app()->end();
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