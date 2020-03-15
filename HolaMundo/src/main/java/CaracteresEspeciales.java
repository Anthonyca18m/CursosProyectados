/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class CaracteresEspeciales {
    public static void main(String[] args) {
        String name = "Karla";
        String lastName = "Esparra";
        
        System.out.println( name + " " + lastName);
        
        System.out.println( "Nueva linea:  \n" + name);
        
        System.out.println("Tabulador: \t " + name);
        
        System.out.println("Retroceso: \b " + name);
        
        System.out.println("Retorno de carro: \r " + name);
        
        System.out.println("Comilla simple: \'" + name + "\'");
        
        System.out.println("Comilla doble: \"" + name + "\"");
    }
}
