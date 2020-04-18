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
        
        int operandoA = 6;
        int operandoB = 2;
        Aritmetica obj = new Aritmetica(operandoA, operandoB);
                
        System.out.println("Suma : " + obj.sumar());
        System.out.println("Resta : " + obj.restar());
        System.out.println("Multiplicación : " + obj.multiplicar());
        System.out.println("División : " + obj.dividir());
    }
    
    
    
}
