/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class PruebaAritmetica {
    
    public static void main(String[] args) {
        
        Aritmetica aritmetica = new Aritmetica();
        aritmetica.a = 3;
        aritmetica.b = 3;
        int resultado = aritmetica.sumar();
        
        System.out.println("resultado : " + resultado);
        
        Aritmetica aritmetica2 = new Aritmetica(5,7);
        
        System.out.println("resultado 2: " + aritmetica2.sumar());
    }
    
}
