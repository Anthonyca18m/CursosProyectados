<?php

class SedeTrabajador extends ActiveRecord
{
    public static function model($model = __CLASS__)
    {
        return parent::model($model);
    }
    
    public static function tableName()
    {
        return 'sedes_trabajadores';
    }

    public function relations()
    {
        return array(
            'sede' => array(self::BELONGS_TO, 'Sede', 'sede_id'),
            'trabajador' => array(self::BELONGS_TO, 'Trabajador', 'trabajador_id'),
        );
    }
}
