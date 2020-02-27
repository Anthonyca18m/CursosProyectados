<?php 

/*
Los mienbro de clases declarados como public pueden ser accedidos desde 
cualquier lado. Los protected, solo desde la misma clase o desde las clases 
que hereden de ella y desde las clases parent. Aquellos mienbros definidos
como private, unicamente pueden ser accedidos desde la clase que los definio
*/
    class Myclass{
        public $public = "public ---<br>";
        private $private = "private ----<br>";
        protected $protected = "protected ----<br>";

/*
El constructor es un método especial de una clase. El objetivo
fundamental del constructor es inicializar los atributos del objeto
que creamos
*/
        //Declaración de un metodo constructor
        public function __construct($parametro){
            $this->private = $parametro;
        }

        public function MyPublic(Myclass $otro){
            echo $otro->private;
        }
        public function MyProtected(){
            echo $this->protected;
        }
        public function MyPrivate(){
            echo $this->private;
        }

        public function Metodos(){
            // $this->MyPublic();
            $this->MyProtected();
            $this->MyPrivate();
        }

    }
    
    $obj = new Myclass("<br>Este es el valor asigando al private<br>");
    $obj->Metodos();

    $obj->Mypublic(new Myclass("otro"));
?>