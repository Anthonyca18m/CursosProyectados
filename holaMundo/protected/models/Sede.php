<?php 

class Sede extends CActiveRecord
{
    public static function model($model = __CLASS__)
    {
        return parent::model($model);
    }

    public function tableName()
    {
        return 'sedes';
    }

    public function relations()
    {
        return array(
            'trabajadores' => array(self::MANY_MANY, 'Trabajador', 'sedes_trabajadores(sede_id, trabajador_id)'),
        );
    }

    public function rules()
    {
        return array(
            // array('empresa_id, nombre, direccion, estado', 'required', 'message' => 'El campo es obligatorio.'),
            array('empresa_id, nombre, direccion, estado', 'ext.MyValidator','param1'=> 0)
        );
    }
}