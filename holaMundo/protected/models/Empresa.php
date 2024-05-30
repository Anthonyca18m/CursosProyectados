<?php 

class Empresa extends CActiveRecord
{
    public static function model($model = __CLASS__)
    {
        return parent::model($model);
    }

    public function tableName()
    {
        return 'empresas';
    }

    public function attributeLabels()
    {
        return array(
            'nombre' => 'Nombre',
            'alias' => 'Alias',
            'ruc' => 'RUC',
            'direccion' => 'Dirección',
            'referencia' => 'Referencia',
        );
    }

    public function rules()
    {
        return array(
            array('nombre, alias, ruc, direccion, referencia, estado', 'required', 'message' => 'El campo es obligatorio.'),


            array('nombre', 'length', 'min' => 2, 'max' => 200, 
                'tooShort' => 'El campo debe tener al menos 2 caracteres.', 
                'tooLong' => 'El campo no puede superar los 200 caracteres.'),
            array('nombre', 'unique', 'criteria' => 
                array( 'condition' => 'id != :id', 'params' => array(':id' => $this->id) ), 'message' => 'El campo ya está en uso.'),

            array('alias', 'length', 'min' => 2, 'max' => 50, 
                'tooShort' => 'El campo debe tener al menos 2 caracteres.', 
                'tooLong' => 'El campo no puede superar los 50 caracteres.'),

            array('ruc', 'length', 'max' => 11, 'tooLong' => 'El campo no puede superar los 11 dígitos.'),
            array('ruc', 'match', 'pattern' => '/^(20|10)\d{9}$/', 'message' => 'El campo debe comenzar con 20 o 10 y tener 11 dígitos.'),
            array('ruc', 'unique', 'criteria' => 
                array( 'condition' => 'id != :id', 'params' => array(':id' => $this->id) ), 'message' => 'El RUC ya está en uso.'),

            array('direccion', 'length', 'min' => 10, 'max' => 200, 
                'tooShort' => 'La campo debe tener al menos 10 caracteres.', 
                'tooLong' => 'La campo no puede superar los 200 caracteres.'),

            array('referencia', 'length', 'min' => 5, 'max' => 200, 
                'tooShort' => 'La campo debe tener al menos 5 caracteres.', 
                'tooLong' => 'La campo no puede superar los 200 caracteres.'),

            array('estado', 'in', 'range' => array(0, 1),  'message' => 'El campo estado debe ser 0 o 1.'),
        );
    }
}