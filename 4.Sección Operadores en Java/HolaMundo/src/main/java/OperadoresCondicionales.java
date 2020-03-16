/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class OperadoresCondicionales {
 
    public static void main(String[] args) {
        
        boolean vacaciones = true;
        
        boolean diaLibre = true;
        
        if (diaLibre && vacaciones) { // si las dos condiciones cumplen
            System.out.println("Estas libre soy...");
        }else{
            System.out.println("No estas libre");
        }
        
        if (diaLibre || vacaciones) {// si al menos una de las dos condiciones cumplen
            System.out.println("Estas libre soy...");
        }else{
            System.out.println("No estas libre");
        }
    }
}
