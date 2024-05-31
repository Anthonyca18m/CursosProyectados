<?php

class Cargo extends CActiveRecord
{
    public static function model($model = __CLASS__)
    {
        return parent::model($model);
    }
    
    public function tableName()
    {
        return 'cargos';
    }

    public function relations()
    {
        return array(
            'trabajadores' => array(self::HAS_MANY, 'Trabajador', 'cargo_id'),
        );
    }
    
}
