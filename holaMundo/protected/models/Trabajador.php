<?php 

class Trabajador extends CActiveRecord
{
    public static function model($model = __CLASS__)
    {
        return parent::model($model);
    }

    public function tableName()
    {
        return 'trabajadores';
    }

    public function relations()
    {
        return array(
            'sedesTrabajadores' => array(self::HAS_MANY, 'SedeTrabajador', 'trabajador_id'),
            'sedes' => array(self::MANY_MANY, 'Sede', 'sedes_trabajadores(trabajador_id, sede_id)'),
            'cargo' => array(self::BELONGS_TO, 'Cargo', 'cargo_id'),
        );
    }


    public function rules()
    {
        return array(
            // array('nombre, direccion, estado', 'required', 'message' => 'El campo es obligatorio.'),


            // array('nombre', 'length', 'min' => 2, 'max' => 200, 
            //     'tooShort' => 'El campo debe tener al menos 2 caracteres.', 
            //     'tooLong' => 'El campo no puede superar los 200 caracteres.'),
            // array('nombre', 'unique', 'criteria' => 
            //     array( 'condition' => 'id != :id', 'params' => array(':id' => $this->id) ), 'message' => 'El campo ya está en uso.'),

            // array('alias', 'length', 'min' => 2, 'max' => 50, 
            //     'tooShort' => 'El campo debe tener al menos 2 caracteres.', 
            //     'tooLong' => 'El campo no puede superar los 50 caracteres.'),

            // array('direccion', 'length', 'min' => 10, 'max' => 200, 
            //     'tooShort' => 'La campo debe tener al menos 10 caracteres.', 
            //     'tooLong' => 'La campo no puede superar los 200 caracteres.'),

            // array('referencia', 'length', 'min' => 5, 'max' => 200, 
            //     'tooShort' => 'La campo debe tener al menos 5 caracteres.', 
            //     'tooLong' => 'La campo no puede superar los 200 caracteres.'),

            // array('estado', 'in', 'range' => array(0, 1),  'message' => 'El campo estado debe ser 0 o 1.'),
        );
    }
}