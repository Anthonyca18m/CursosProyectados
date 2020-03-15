/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class TiposFlotantes {
    public static void main(String[] args) {
        
        float floatVar = 1000.10F;
        
        System.out.println(floatVar);
        
        System.out.println("bits en el Tipo float: " + Float.SIZE);
        System.out.println("bytes en el Tipo float: " + Float.BYTES);
        System.out.println("minimo valor en el Tipo float: " + Float.MIN_VALUE);
        System.out.println("maximo valor en el Tipo float: " + Float.MAX_VALUE);
        
        
        System.out.println("\n");
        
        double doubleVar = 1000.1000D;
        
        System.out.println(doubleVar);
        
        System.out.println("bits en el Tipo Double: " + Double.SIZE);
        System.out.println("bytes en el Tipo Double: " + Double.BYTES);
        System.out.println("minimo valor en el Tipo Double: " + Double.MIN_VALUE);
        System.out.println("maximo valor en el Tipo Double: " + Double.MAX_VALUE);
    }
}
