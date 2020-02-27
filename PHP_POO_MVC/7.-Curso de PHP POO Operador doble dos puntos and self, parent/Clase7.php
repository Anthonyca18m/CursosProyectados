<?php 

    /*
    el doble dos-puntos o resolución de ámbito es un token que permite acceder a elementos estáticos, constantes,
    y sobreescribir propiedades o métodos de una clase
    */

    class Clase7{

        const CONST_VALUE = "Un valor constante";

        function __construct(){

        }

        protected function myMetodo(){
            echo "Este es el metodo protegido";
        }
    }

    class Myclase extends Clase7{
        
        public static $static = "variable estatico";

        function __construct() {
            
        }
        public function myMetodo(){
            parent::myMetodo();
        }
        public function mostrar(){
           echo self::$static;
        }
    }
    $classname = "Clase7";
    // echo $classname::CONST_VALUE;
    // echo Clase7::CONST_VALUE;
    // echo Myclase::CONST_VALUE;
    echo Myclase::myMetodo();
    echo Myclase::mostrar();

?>