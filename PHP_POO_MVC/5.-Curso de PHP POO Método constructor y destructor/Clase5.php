<?php 

 class Clase5{
     
    private $nombre;
    private $edad;

    function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //metodo desctructor sera llamada tan pronto como no hayan otras
    // referencias a un objeto determinado, o en cualquier otra cirucsntanc desctructor
    // finalizacion
    function __destruct(){
        $this->edad;
    }

    function mostrar(){
        return $this->nombre;
    }


 }

    $obj1 = new Clase5("Anthony", 20);
    $obj2 = new Clase5("Anthony1", 21);
 
    echo "Nombre: " . $obj1->mostrar();
    echo "Nombre: " . $obj2->mostrar();

?>