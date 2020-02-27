<?php 

 class Clase6{

    protected $protected = "protected";

    function __construct(){

    }
    public function mostrarDatos($dato){
        echo "El dato es: " . $dato;
    }
    public function mostrar(){
        echo "Método mostrar que esta en la Clase6: ";
    }
    
 }
/*
Cuando se extiende una clase, la subclase hereda todos lo métodos de la clase
"Padre" o la clase la cual estamos extendiendo
*/
 class MyClaseHerencia extends Clase6{

    function __construct(){

    }
    public function propiedad(){
        echo $this->protected;
    }
 }

$obj = new MyclaseHerencia();

$obj->mostrarDatos(20);
$obj->mostrar();
$obj->propiedad();
?>