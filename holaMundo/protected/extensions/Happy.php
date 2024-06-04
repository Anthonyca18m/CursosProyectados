<?php 

class Happy extends CApplicationComponent
{
    public $param1; // esto se declara e internamente se setea como null sino lo setean

    public function init()
    {
        echo "init";
    }

    public function hi()
    {
        echo "hi";
        echo $this->param1;
    }
}