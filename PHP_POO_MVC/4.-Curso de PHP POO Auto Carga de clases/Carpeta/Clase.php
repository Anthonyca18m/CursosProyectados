<?php 

    // Una clase puede tener sus propias const antes, variables (llamadas
    // "propiedades"), funciones (llamadas "metodos");

    class Clase {
        //Declaración de una propiedad
        public $var = "PHP POO<br>";
        public static $mi_static = "PDHN<br>";
        private $php = "variable privada<br>";

        public function Mostrara(){
            echo $this->var;

            echo $this->php;
            // A partir de PHP 5.3.0 es posible hacer referencia a una clase usando
            // una variable. El valro de la variable no puede ser una palabra 
            // reservada( p ej. self, parent, static)
            echo self::$mi_static;
        }

        public static function MetodoEstatico(){
            echo self::$mi_static;
        }                   
    }

    // Para crear una instancia de una clase, se debe emplear la palabra
    // reservada new. un objeto siempre se creara
    $obj = new Clase();

    $obj->Mostrara();

    Clase::MetodoEstatico(); //forma de llamar 1

    $obj::MetodoEstatico(); // forma de llamar 2




?>