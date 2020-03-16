/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class PruebaPersonas {

    public static void main(String[] args) {
        
        //Instanciamos la clase Persona con un alias "p"
        Persona p;
        p = new Persona();
        
        
        //asignamos valor a los atributos
        p.nombre = "Tom";
        p.apellido = "Parker";

        
        //desplegamos e imprimimos los datos en pantalla
        p.desplegarDatos();
    }
}
