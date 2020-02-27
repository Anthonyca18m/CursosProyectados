<?php 

    class AutoLoader{
        function __construct(){
            /*
            sql_autoload_register() esta función añade la función 
            que indiquemos a la pila de autocarga y proporciona una
            alternativa más flexible para las clases de carga automática
            */
            spl_autoload_register(array($this, "Loader"));
        }
        private function Loader($className){
            include( "Carpeta/" . $className . ".php");
        }
    }
    
    $loader = new AutoLoader();

    new Clase();
    new Clase2("Auto Cargador");
    new Clase3();

?>