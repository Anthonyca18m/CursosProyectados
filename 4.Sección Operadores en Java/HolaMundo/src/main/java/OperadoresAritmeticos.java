/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class OperadoresAritmeticos {

    public static void main(String[] args) {

        int a = 5, b = 3;

        System.out.println("La suma es: " + (a + b));

        System.out.println("La resta es: " + (a - b));

        System.out.println("La división es: " + (a / b));

        System.out.println("La multiplicación es: " + (a * b));

        System.out.println("La modulo es: " + (a % b));
        
        if ((a % 2) == 0) {
            
            System.out.println("Par");
        }else{
            System.err.println("Inpar");
        }

    }
}
