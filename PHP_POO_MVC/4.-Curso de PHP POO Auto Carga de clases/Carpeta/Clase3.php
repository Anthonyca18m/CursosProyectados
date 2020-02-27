<?php  

    class Clase3{
        /*
        Las constantes se diferencian de las variables comunes en que no 
        utilizan el simbolo $ al declararlas o emplearlas.
        El valor debe ser una expresión constante, no (por ejemplo) una
        variable, una propiedad, un resiltado de ua operación matemática
        o una llamada a una función
        */
        const CONSTANTE = "Hola Mundo soy un constante<br>";
        
        function MostrarConstante(){
            echo self::CONSTANTE;
        }
    }

    /*
    A partir de php 5.3.0 es posible hacer referencia a una clase
    utlizando una variable El valor de la variable no pued eser una palabra reservada
    */

    $nombreClase = "Clase3";

    echo $nombreClase::CONSTANTE;
    echo $nombreClase::MostrarConstante();
    echo Clase3::CONSTANTE;


    $clase = new Clase3();

    $clase->MostrarConstante();

    echo $clase::CONSTANTE;

?>