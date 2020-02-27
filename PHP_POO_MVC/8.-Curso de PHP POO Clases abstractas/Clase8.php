<?php 
/**
 * PHP 5 introduce clases y metodos abstractos. las clases definidas
 * como abstractas no se pueden instancia y cualquier clase que contiene al menos
 * un metodo abstracto debe ser definido como tal. los metodos definidos como abstractos simplement
 * declaran la firma del metodo pero no pueden definir la implementacion
 */
abstract class Clase8{

    function __construct()
    {
        
    }

    abstract protected function Valor();
    abstract protected function getValor($dato);
}

class Myclass extends Clase8
{
    function __construct()
    {
        
    }

    public function Valor(){
        echo "metodo que esta en la clase abstracta";
    }
    public function getValor($dato){

    }
}


?>