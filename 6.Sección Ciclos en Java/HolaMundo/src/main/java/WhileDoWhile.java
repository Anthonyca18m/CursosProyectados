/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class WhileDoWhile {

    public static void main(String[] args) {

        var contador = 0;

        /*while (contador < 3) {

            System.out.println("Contador : " + contador);
            contador++;
        }*/

        do {
            
            System.out.println("Contador : " + contador);
            contador++;
            
        } while (contador < 3);
    }
}
