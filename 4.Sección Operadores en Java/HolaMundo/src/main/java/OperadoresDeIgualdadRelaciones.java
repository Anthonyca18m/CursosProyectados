/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class OperadoresDeIgualdadRelaciones {
    
    public static void main(String[] args) {
        
        int a= 3, b= 2;
        
        boolean c = (a == b);
        
        System.out.println("c = " + c);
        
        boolean d = (a != b);
        
        System.out.println("d = " + d);
        
        
        String cadena1 = "hola";
        String cadena2 = "Hola";
        
        System.out.println(cadena1.equals(cadena2));
        
        System.err.println( a >= 2);
    }
}
