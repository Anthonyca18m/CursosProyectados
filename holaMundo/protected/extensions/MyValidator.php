<?php 

class MyValidator extends CValidator
{
    public $param1 = 'x'; // esto se declara e internamente se setea como null sino lo setean

    public function validateAttribute($object, $attribute)
    {
        if ($object->$attribute == $this->param1)
            $this->addError($object, $attribute, "Esto es un error pipipi.");
    }
}